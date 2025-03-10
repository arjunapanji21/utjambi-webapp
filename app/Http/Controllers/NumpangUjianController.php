<?php

namespace App\Http\Controllers;

use App\Exports\MatakuliahNumpangUjianExport;
use App\Exports\NumpangUjianExport;
use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\PesertaUjian;
use App\Models\WilayahUjian;
use App\Imports\MatakuliahImport;
use App\Imports\PesertaUjianImport;
use App\Imports\WilayahUjianImport;
use App\Models\TambahNaskahMatakuliah;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use stdClass;

class NumpangUjianController extends Controller
{
    public function data_numpang_ujian_export(){
        // $data = NumpangUjian::all();
        // foreach($data as $row){
        //     $row->ut_daerah_asal = str_replace('UT ', '', $row->ut_daerah_asal);
        //     $row->ut_daerah_tujuan = str_replace('UT ', '', $row->ut_daerah_tujuan);
        //     $row->save();
        // }
        // return back();
        // $data = NumpangUjian::where('status', 'Diproses')->get();
        // $data = NumpangUjian::whereIn('ut_daerah_tujuan', ['17 / UT JAMBI', '17 / JAMBI'])->where('status', 'Diproses')->get()->groupBy('wilayah_ujian_tujuan');
        // set_time_limit(0);
        // TambahNaskahMatakuliah::query()->truncate();
        // foreach($data as $wilayah=>$mahasiswa){
        //     foreach($mahasiswa as $row){
        //         foreach(explode("|", $row->matakuliah) as $mk){
        //             $matakuliah = new TambahNaskahMatakuliah();
        //             $matakuliah->kode_wilayah = explode(" / ", $wilayah)[0];
        //             $matakuliah->nama_wilayah = explode(" / ", $wilayah)[1];
        //             $matakuliah->kode_matakuliah = json_decode($mk)->kode;
        //             $matakuliah->nama_matakuliah = json_decode($mk)->nama;
        //             $matakuliah->kode_waktu_ujian = json_decode($mk)->kode_waktu_ujian;
        //             $matakuliah->save();
        //         }
        //     }
        // }
        // // dd(TambahNaskahMatakuliah::all()->groupBy(['kode_wilayah', 'kode_matakuliah']));
        // // $result = [];
        // // $index = 0;
        // // foreach(TambahNaskahMatakuliah::all()->groupBy(['kode_wilayah', 'kode_matakuliah']) as $kode_wilayah=>$kode_matakuliah){
        // //     foreach($kode_matakuliah as $kode=>$matakuliah){
        // //         $result[$index]['kode_wilayah'] = $kode_wilayah;
        // //         $result[$index]['kode_matakuliah'] = $kode;
        // //         $result[$index]['jumlah'] = $matakuliah->count();
        // //         $index += 1;
        // //     }
        // // }
        // // dd($result);
        return Excel::download(new NumpangUjianExport, 'data_numpang_ujian_'.date('Ymdhis').'.xlsx');
    }

    public function matakuliah_numpang_ujian_export(){
        set_time_limit(0);
        TambahNaskahMatakuliah::truncate();
        $numpang = NumpangUjian::where('ut_daerah_tujuan', '17 / JAMBI')->where('status', 'Diproses')->orderBy('wilayah_ujian_tujuan', 'asc')->get();
        foreach($numpang as $row){
            $mk = Matakuliah::whereIn('kode', explode(", ", $row->matakuliah))->orderBy('kode_waktu_ujian', 'asc')->get();
            foreach($mk as $item){
                $naskah = new TambahNaskahMatakuliah();
                $naskah->kode_wilayah = explode(" / ",$row->wilayah_ujian_tujuan)[0];
                $naskah->nama_wilayah = explode(" / ",$row->wilayah_ujian_tujuan)[1];
                $naskah->kode_waktu_ujian = $item->kode_waktu_ujian;
                $naskah->kode_matakuliah = $item->kode;
                $naskah->nama_matakuliah = $item->nama;
                $naskah->save();
            }
        }
        return Excel::download(new MatakuliahNumpangUjianExport, 'matakuliah_numpang_ujian_'.date('Ymdhis').'.xlsx');
    }

    public function batch_ubah_status(Request $request){
        if($request['status'] == "Diproses"){
            foreach(NumpangUjian::where('status', "Antrian")->get() as $row){
                $row->status = $request['status'];
                $row->save();
            }
        }
        else if($request['status'] == "Diterima"){
            foreach(NumpangUjian::where('status', "Diproses")->get() as $row){
                $row->status = $request['status'];
                $row->save();
            }
        }
        return back()->with('success', 'Batch Update Status Pengajuan Berhasil!');
    }

    public function data_numpang_ujian(Request $request)
    {
        if(isset($request['filter']) && !empty($request['search'])){
            $data = NumpangUjian::where($request['filter'], 'like', '%'.$request['search'].'%')->orderBy('created_at', 'desc');
            
        }
        else if($request['filter'] == 'UT Lain Numpang Ke Jambi'){
            $data = NumpangUjian::whereNotIn('ut_daerah_asal', ['17 / UT JAMBI', '17 / JAMBI'])->orderBy('created_at', 'desc');
        }
        else if($request['filter'] == 'UT Jambi Numpang Ke UT Lain'){
            $data = NumpangUjian::whereNotIn('ut_daerah_tujuan', ['17 / UT JAMBI', '17 / JAMBI'])->orderBy('ut_daerah_tujuan', 'asc');
        }
        else if($request['filter'] == 'all'){
            $data = NumpangUjian::orderBy('created_at', 'desc');
        }
        else{
            $data = null;
        }

        if(!is_null($data)){
            foreach($data->get()->groupBy('nim') as $key=>$row){
                if(count($row) > 1)
                {
                    for($i=0;$i<count($row)-1;$i++)
                    {
                        $duplikat = NumpangUjian::find($row[$i]->id);
                        if($duplikat->status == "Antrian"){
                            $duplikat->delete();
                        }
                    }
                }
            }
        }

        $master = [
            'title' => 'Data Numpang Ujian | UT Jambi',
            'active' => 'Numpang Ujian',
            'data' => $data != null ? $data->get() : $data,
            'jumlahData' => count(NumpangUjian::all()),
        ];
        return view('admin.aplikasi.numpang_ujian.data_numpang_ujian', $master);
    }

    public function surat_pengantar(Request $request)
    {
        // $data = NumpangUjian::whereNotIn('ut_daerah_tujuan', ['17 / UT JAMBI', '17 / JAMBI'])->where('surat_pengantar', null)->orderBy('ut_daerah_tujuan', 'asc');
        $data = NumpangUjian::whereNotIn('ut_daerah_tujuan', ['17 / UT JAMBI', '17 / JAMBI'])->where('status', 'Diproses')->orderBy('ut_daerah_tujuan', 'asc');
        $master = [
            'title' => 'Data Numpang Ujian | UT Jambi',
            'active' => 'Numpang Ujian',
            'data' => $data != null ? $data->get()->groupBy('ut_daerah_tujuan') : $data,
            'jumlahData' => count(NumpangUjian::all()),
        ];
        return view('admin.aplikasi.numpang_ujian.surat_pengantar', $master);
    }

    public function surat_pengantar_upload(Request $request)
    {

        $data = NumpangUjian::where('ut_daerah_tujuan', $request['ut_daerah_tujuan'])->where('surat_pengantar', null)->where('status', 'Diproses')->get();
        $request->validate([
            'file' => 'required',
        ]);
        $file = $request->file('file');
        $folder = public_path('uploads/numpang_ujian/surat_pengantar_jambi/');
        $filename = str_replace(" ","_",str_replace("/","",$request['ut_daerah_tujuan']))."_".date("Ymd")."_".date("His").".pdf";
        $file->move($folder, $filename);
        foreach($data as $row){
            $row->surat_pengantar = 'uploads/numpang_ujian/surat_pengantar_jambi/'.$filename;
            $row->status = "Diterima";
            $row->save();
        }
        return back()->with("success", "Surat Pengantar Berhasil Di Upload");
    }

    public function hapus_data_numpang_ujian(Request $request)
    {
        $data = NumpangUjian::find($request['id']);
        // File::delete($data->surat_pengantar, $data->dokumen_pendukung_alasan);
        $data->delete();
        return back()->with('success', 'Data berhasil dihapus.');
    }

    public function update_data_numpang_ujian(Request $request)
    {
        $data = NumpangUjian::find($request['id']);
        $data->status = $request['status'];
        $data->keterangan = $request['keterangan'];
        $data->save();
        return back()->with('success', 'Data berhasil di update.');
    }

    public function status_numpang_ujian($nim)
    {
        $data = NumpangUjian::where('nim', $nim)->latest()->first();
        $matakuliah = Matakuliah::whereIn('kode', explode(", ", $data->matakuliah))->orderBy('kode_waktu_ujian', 'asc')->get();
        $master = [
            'title' => 'Status Numpang Ujian | UT Jambi',
            'data' => $data,
            'matakuliah' => $matakuliah,
        ];
        return view('forms.status_numpang_ujian', $master);
    }

    public function surat_permohonan_numpang_ujian($id)
    {
        $master = [
            'title' => 'Surat Permohonan Numpang Ujian',
            'mahasiswa' => NumpangUjian::find($id),
        ];
        return view('forms.surat_permohonan_numpang_ujian', $master);
    }

    public function surat_permohonan_numpang_ujian_panutan($id)
    {
        $master = [
            'title' => 'Surat Permohonan Numpang Ujian Ke Panutan',
            'mahasiswa' => NumpangUjian::find($id),
        ];
        return view('forms.surat_permohonan_numpang_ujian_panutan', $master);
    }

    public function surat_permohonan_numpang_ujian_panutan_batch(Request $request)
    {
        $data = NumpangUjian::where('ut_daerah_tujuan', $request['ut_daerah_tujuan'])->where('surat_pengantar', null)->orderBy('nama', 'asc')->get();
        foreach($data as $row){
            $mk = Matakuliah::whereIn('kode', explode(', ', $row->matakuliah))->orderBy('kode_waktu_ujian')->get();
            $row->matakuliah = $mk;
        }
        $master = [
            'title' => 'Surat Permohonan Numpang Ujian Ke Panutan (Batch)',
            'ut_daerah_tujuan' => $request['ut_daerah_tujuan'],
            'mahasiswa' => $data,
        ];
        return view('forms.surat_permohonan_numpang_ujian_panutan_batch', $master);
    }

    public function form_numpang_ujian_1()
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $master = [
            'title' => 'Form Numpang Ujian | UT Jambi',
        ];

        return view('forms.form_numpang_ujian_1', $master);
    }

    public function form_numpang_ujian_2(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $mahasiswa = null;
        $wilayah_ujian = [];
        $utdaerah = [];
        foreach (WilayahUjian::where('aktif', true)->get()->groupBy('kode_upbjj') as $row) {
            array_push($utdaerah, ['kode_upbjj' => $row[0]->kode_upbjj, 'nama_upbjj' => $row[0]->nama_upbjj]);
        }
        if ($request->has('alasan')) {
            $request->validate([
                'no_wa' => 'required|min:9|max:15',
                'wilayah_ujian_tujuan' => 'required',
                'tgl_pindah_lokasi' => 'required',
            ]);
            $kode_mk = [];
            $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
            foreach ($mahasiswa as $row) {
                array_push($kode_mk, $row->kode_mk);
            }

            if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '1%')->orderBy('kode_waktu_ujian', 'asc')->get();
            } else if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H2") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '2%')->orderBy('kode_waktu_ujian', 'asc')->get();
            } else if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1-H2") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->orderBy('kode_waktu_ujian', 'asc')->get();
            }

            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'submit' => $request->all(),
            ];

            return view('forms.form_numpang_ujian_2', $master);
        }

        if ($request->has('nim')) {
            $request->validate([
                'nim' => 'required',
            ]);
            try {
                if (count(NumpangUjian::where('nim', $request['nim'])->get()) > 0) {
                    return redirect()->route('status.numpang_ujian', $request['nim']);
                }
                if (!isset($request['ut_daerah_tujuan'])){
                    return back()->with('error', "Silahkan pilih UT Daerah tujuan sebelum melanjutkan ke tahap berikutnya.");
                }
                $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
                $wilayah_ujian = WilayahUjian::where('kode_upbjj', preg_replace('/\s+/', '', explode("/", $request['ut_daerah_tujuan'])[0]))->where('aktif', true)->get();
            } catch (\Throwable $th) {
                return back()->with('error', $th);
            }
        }

        if (!empty($mahasiswa) && count($mahasiswa) > 0) {
            $data = new stdClass();
            $data->nim = $mahasiswa[0]->nim;
            $data->nama = $mahasiswa[0]->nama_mhs;
            $data->prodi = $mahasiswa[0]->prodi;
            $data->kabko = $mahasiswa[0]->kabko;
            $data->upbjj = "17 / JAMBI";
            $data->tpu = $mahasiswa[0]->kode_tpu . " / " . $mahasiswa[0]->nama_tpu;

            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'mahasiswa' => $data,
                'ut_daerah_tujuan' => $request['ut_daerah_tujuan'],
                'wilayah_ujian' => $wilayah_ujian,
            ];
            return view('forms.form_numpang_ujian_2', $master);
        } else {
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'ut_daerah_tujuan' => $utdaerah,
            ];
            return view('forms.form_numpang_ujian_2', $master);
        }
    }

    public function form_numpang_ujian_3(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $mahasiswa = null;

        if ($request->has('alasan')) {
            $request->validate([
                'no_wa' => 'required|min:9|max:15',
            ]);

            $kode_mk = [];

            $token = Token::where('nama', 'SRS')->get()->first()->token;

            // get masa aktif
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api-mahasiswa-srs.ut.ac.id/api-srs-mahasiswa/v1/masa-aktif?kodeKegiatan=AKRG');
            if ($response->status() == 200) {
                dd($response->json('data'));
                $result = $response->json('data')['dataBilling'][0];
                $request['nobilling'] = $result['nobilling'];
                $request['wilayah_ujian_asal'] = $result['billing_info'][0]['wilayah_ujian']['kode_wilayah_ujian'] . " / " . $result['billing_info'][0]['wilayah_ujian']['nama_wilayah_ujian'];
            } else if ($response->status() != 200) {
                return back()->with('error', $response->json('message'));
            }

            // get billing mahasiswa from api
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api-mahasiswa-srs.ut.ac.id/api-srs-mahasiswa/v1/data-matakuliah?nim=' . $request['nim'] . '&masa=20232');
            if ($response->status() == 200) {
                $result = $response->json('data')['dataBilling'][0];
                $request['nobilling'] = $result['nobilling'];
                $request['wilayah_ujian_asal'] = $result['billing_info'][0]['wilayah_ujian']['kode_wilayah_ujian'] . " / " . $result['billing_info'][0]['wilayah_ujian']['nama_wilayah_ujian'];
            } else if ($response->status() != 200) {
                return back()->with('error', $response->json('message'));
            }

            // get detail billing from api
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api-srs.ut.ac.id/api-srs-mahasiswa/v1/billing-detail/' . $request['nobilling']);

            
            // get billing mahasiswa dari api
            if ($response->status() == 200) {
                foreach($response->json('data')['billing_detail'] as $row){
                    array_push($kode_mk, $row['mata_kuliah']['kode_matakuliah']);
                }
            } else if ($response->status() != 200) {
                return back()->with('error', $response->json('message'));
            }

            
            if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '1%')->orderBy('kode_waktu_ujian', 'asc')->get();
            } else if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H2") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->where('kode_waktu_ujian', 'like', '2%')->orderBy('kode_waktu_ujian', 'asc')->get();
            } else if (preg_replace('/\s+/', '', explode('/', $request['tgl_pindah_lokasi'])[1]) == "H1-H2") {
                $request['matakuliah'] = Matakuliah::whereIn('kode', $kode_mk)->where('skema', 'UTM')->orderBy('kode_waktu_ujian', 'asc')->get();
            }

            $request['ut_daerah_tujuan'] = "17 / JAMBI";
            
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'submit' => $request->all(),
            ];

            return view('forms.form_numpang_ujian_3', $master);
        }

        if ($request->has('nim')) {
            $request->validate([
                'nim' => 'required',
            ]);
            try {
                if (count(NumpangUjian::where('nim', $request['nim'])->get()) > 0) {
                    return redirect()->route('status.numpang_ujian', $request['nim']);
                } else {
                    // get detail mahasiswa from api
                    $token = Token::where('nama', 'SRS')->get()->first()->token;
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $token,
                        'Accept' => 'application/json',
                    ])->get('https://api-srs.ut.ac.id/api-srs-mahasiswa/v1/data-pribadi/' . $request['nim']);

                    if ($response->status() == 200) {
                        $result = $response->json('data');
                        $mahasiswa['nim'] = $result['nim'];
                        $mahasiswa['nama'] = $result['nama_mahasiswa'];
                        $mahasiswa['ut_daerah_asal'] = $result['info_ut']['upbjj']['kode_upbjj'] . ' / ' . strtoupper($result['info_ut']['upbjj']['nama_upbjj']);

                        if($mahasiswa['ut_daerah_asal'] == "17 / JAMBI"){
                            return redirect()->route('form.numpang_ujian_2');
                        }

                        $mahasiswa['prodi'] = $result['info_ut']['program_studi']['kode_program_studi'] . ' / ' . strtoupper($result['info_ut']['program_studi']['nama_program_studi']);
                    } else if ($response->status() != 200) {
                        return back()->with('error', $response->json('message'));
                    }
                }
            } catch (\Throwable $th) {
                return back()->with('error', $th);
            }
        }

        if (!empty($mahasiswa) && count($mahasiswa) > 0) {
            $wilayah_ujian = WilayahUjian::where('kode_upbjj', 17)->where('aktif', true)->get();
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
                'mahasiswa' => $mahasiswa,
                'ut_daerah_tujuan' => "17 / JAMBI",
                'wilayah_ujian' => $wilayah_ujian,
            ];
            return view('forms.form_numpang_ujian_3', $master);
        } else {
            $master = [
                'title' => 'Form Numpang Ujian | UT Jambi',
            ];
            return view('forms.form_numpang_ujian_3', $master);
        }
    }

    public function submit_form_numpang_ujian(Request $request)
    {
        if ($request->has('file')) {
            $request->validate([
                'file' => 'required|file|max:5120', // 5120 KB = 5 MB
            ]);
            $file = $request->file('file');
            $folder = public_path('uploads/numpang_ujian/');
            $file->move($folder, $request['nim'] . "_dokumen_pendukung_alasan.pdf");
            $dokumen_pendukung_alasan = 'uploads/numpang_ujian/' . $request['nim'] . "_dokumen_pendukung_alasan.pdf";
        } else {
            $dokumen_pendukung_alasan = null;
        }

        $numpang = new NumpangUjian;
        $numpang->nim = $request['nim'];
        $numpang->nama = $request['nama'];
        $numpang->prodi = $request['prodi'];
        $numpang->ut_daerah_asal = $request['ut_daerah_asal'];
        $numpang->ut_daerah_tujuan = $request['ut_daerah_tujuan'];
        $numpang->wilayah_ujian_asal = $request['wilayah_ujian_asal'];
        $numpang->wilayah_ujian_tujuan = $request['wilayah_ujian_tujuan'];
        $numpang->tgl_pindah_lokasi = $request['tgl_pindah_lokasi'];
        $numpang->matakuliah = implode("|", $request['matakuliah']);
        $numpang->skema = "UTM";
        $numpang->alasan = $request['alasan'];
        $numpang->no_wa = $request['no_wa'];
        $numpang->ttd = $request['ttd'];
        $numpang->dokumen_pendukung_alasan = $dokumen_pendukung_alasan;
        $numpang->status = "Antrian";
        $numpang->save();

        // NumpangUjian::create([
        //     "nim" => $request['nim'],
        //     "nama" => $request['nama'],
        //     "prodi" => $request['prodi'],
        //     "ut_daerah_asal" => $request['ut_daerah_asal'],
        //     "ut_daerah_tujuan" => $request['ut_daerah_tujuan'],
        //     "wilayah_ujian_asal" => $request['wilayah_ujian_asal'],
        //     "wilayah_ujian_tujuan" => $request['wilayah_ujian_tujuan'],
        //     "tgl_pindah_lokasi" => $request['tgl_pindah_lokasi'],
        //     "matakuliah" => implode("|", $request['matakuliah']),
        //     "skema" => "UTM",
        //     "alasan" => $request['alasan'],
        //     "no_wa" => $request['no_wa'],
        //     "ttd" => $request['ttd'],
        //     "dokumen_pendukung_alasan" => $dokumen_pendukung_alasan,
        //     "status" => "Antrian",
        // ]);
        return redirect()->route("status.numpang_ujian", $request['nim'])->with("success", "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }

    public function submit_form_numpang_ujian_dari_luar(Request $request)
    {
        $request->validate([
            'file' => 'required|file|max:5120', // 5120 KB = 5 MB
        ]);
        $file = $request->file('file');
        $folder = public_path('uploads/numpang_ujian/');
        $file->move($folder, $request['nim'] . "_surat_pengantar.pdf");
        $surat_pengantar = 'uploads/numpang_ujian/' . $request['nim'] . "_surat_pengantar.pdf";

        $numpang = new NumpangUjian;
        $numpang->nim = $request['nim'];
        $numpang->nama = $request['nama'];
        $numpang->prodi = $request['prodi'];
        $numpang->ut_daerah_asal = $request['ut_daerah_asal'];
        $numpang->ut_daerah_tujuan = $request['ut_daerah_tujuan'];
        $numpang->wilayah_ujian_asal = $request['wilayah_ujian_asal'];
        $numpang->wilayah_ujian_tujuan = $request['wilayah_ujian_tujuan'];
        $numpang->tgl_pindah_lokasi = $request['tgl_pindah_lokasi'];
        $numpang->matakuliah = implode("|", $request['matakuliah']);
        $numpang->skema = "UTM";
        $numpang->alasan = $request['alasan'];
        $numpang->no_wa = $request['no_wa'];
        $numpang->ttd = $request['ttd'];
        $numpang->surat_pengantar = $surat_pengantar;
        $numpang->status = "Antrian";
        $numpang->save();

        // NumpangUjian::create([
        //     "nim" => $request['nim'],
        //     "nama" => $request['nama'],
        //     "prodi" => $request['prodi'],
        //     "ut_daerah_asal" => $request['ut_daerah_asal'],
        //     "ut_daerah_tujuan" => $request['ut_daerah_tujuan'],
        //     "wilayah_ujian_asal" => $request['wilayah_ujian_asal'],
        //     "wilayah_ujian_tujuan" => $request['wilayah_ujian_tujuan'],
        //     "tgl_pindah_lokasi" => $request['tgl_pindah_lokasi'],
        //     "matakuliah" => implode("|", $request['matakuliah']),
        //     "skema" => "UTM",
        //     "alasan" => $request['alasan'],
        //     "no_wa" => $request['no_wa'],
        //     "ttd" => $request['ttd'],
        //     "surat_pengantar" => $surat_pengantar,
        //     "status" => "Antrian",
        // ]);
        return redirect()->route("status.numpang_ujian", $request['nim'])->with("success", "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }

    public function matakuliah()
    {
        $data = Matakuliah::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Matakuliah',
            'active' => 'Numpang Ujian',
            'data' => $data->get(),
        ];
        return view('admin.aplikasi.numpang_ujian.matakuliah', $master);
    }

    public function wilayah(Request $request)
    {
        $data = [];
        if($request['filter'] == 'upbjj'){
            $data = WilayahUjian::where('nama_upbjj', 'like', '%'.$request['search'].'%')->get();
        }
        else if($request['filter'] == 'wilayah'){
            $data = WilayahUjian::where('nama_wilayah_ujian', 'like', '%'.$request['search'].'%')->get();
        }
        else if($request['filter'] == 'all'){
            $data = WilayahUjian::orderBy('kode_upbjj', 'asc')->get();
        }
        
        $master = [
            'title' => 'Data Wilayah Ujian',
            'active' => 'Numpang Ujian',
            'data' => $data,
        ];
        return view('admin.aplikasi.numpang_ujian.wilayah_ujian', $master);
    }

    public function wilayah_ujian_update(Request $request)
    {
        $data = WilayahUjian::find($request['id']);
        if($data->aktif == 1){
            $data->aktif = 0;
        }else{
            $data->aktif = 1;
        }
        $data->save();
        
        return back()->with('success', 'Wilayah Lokasi Ujian Berhasil Di Update!');
    }

    public function matakuliah_import(Request $request)
    {
        Matakuliah::truncate();
        Excel::import(new MatakuliahImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
    public function wilayah_ujian_import(Request $request)
    {
        Excel::import(new WilayahUjianImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.wilayah_ujian')->with('success', 'Data wilayah ujian berhasil disimpan kedalam server!');
    }

    function getRomawi($bulan)
    {
        switch ($bulan) {
            case 1:
                return "I";
                break;
            case 2:
                return "II";
                break;
            case 3:
                return "III";
                break;
            case 4:
                return "IV";
                break;
            case 5:
                return "V";
                break;
            case 6:
                return "VI";
                break;
            case 7:
                return "VII";
                break;
            case 8:
                return "VIII";
                break;
            case 9:
                return "IX";
                break;
            case 10:
                return "X";
                break;
            case 11:
                return "XI";
                break;
            case 12:
                return "XII";
                break;
        }
    }
}
