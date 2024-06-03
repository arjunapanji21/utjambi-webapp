<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\PesertaUjian;
use App\Models\WilayahUjian;
use App\Imports\MatakuliahImport;
use App\Imports\PesertaUjianImport;
use App\Imports\WilayahUjianImport;
use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use stdClass;

class NumpangUjianController extends Controller
{
    public function data_numpang_ujian(Request $request)
    {
        $data = NumpangUjian::orderBy('created_at', 'asc');
        $master = [
            'title' => 'Data Numpang Ujian | UT Jambi',
            'active' => 'Numpang Ujian',
            'data' => $data->paginate(10),
        ];
        return view('admin.aplikasi.numpang_ujian.data_numpang_ujian', $master);
    }

    public function status_numpang_ujian($nim)
    {
        $data = NumpangUjian::where('nim', $nim)->latest()->first();
        $master = [
            'title' => 'Status Numpang Ujian | UT Jambi',
            'data' => $data,
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

    public function form_numpang_ujian_1()
    {
        $master = [
            'title' => 'Form Numpang Ujian | UT Jambi',
        ];

        return view('forms.form_numpang_ujian_1', $master);
    }

    public function form_numpang_ujian_2(Request $request)
    {
        $mahasiswa = null;
        $utdaerah = [];
        foreach (WilayahUjian::all()->groupBy('kode_upbjj') as $row) {
            array_push($utdaerah, ['kode_upbjj' => $row[0]->kode_upbjj, 'nama_upbjj' => $row[0]->nama_upbjj]);
        }
        if ($request->has('alasan')) {
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
                $mahasiswa = PesertaUjian::where('nim', $request['nim'])->get();
                $request->validate([
                    'ut_daerah_tujuan' => 'required',
                ]);
                $wilayah_ujian = WilayahUjian::where('kode_upbjj', preg_replace('/\s+/', '', explode("/", $request['ut_daerah_tujuan'])[0]))->get();
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
            $data->upbjj = "17 / UT JAMBI";
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
        $mahasiswa = null;

        if ($request->has('alasan')) {
            $kode_mk = [];

            $token = Token::where('nama', 'SRS')->get()->first()->token;

            // get billing mahasiswa from api
            $response = Http::withHeaders([
                'Authorization' => 'Bearer ' . $token,
                'Accept' => 'application/json',
            ])->get('https://api-srs.ut.ac.id/api-srs-mahasiswa/v1/data-billing?nim=' . $request['nim'] . '&masa=20232');
            if ($response->status() == 200) {
                $result = $response->json('data')['dataBilling'][0];
                $request['nobilling'] = $result['nobilling'];
                $request['wilayah_ujian_asal'] = $result['billing_info'][0]['wilayah_ujian']['kode_wilayah_ujian'] . " / " . $result['billing_info'][0]['wilayah_ujian']['nama_wilayah_ujian'];
            } else if ($response->status() != 200) {
                return back()->with('alert', $response->json('message'));
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
                return back()->with('alert', $response->json('message'));
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
                        $mahasiswa['prodi'] = $result['info_ut']['program_studi']['kode_program_studi'] . ' / ' . strtoupper($result['info_ut']['program_studi']['nama_program_studi']);
                    } else if ($response->status() != 200) {
                        return back()->with('alert', $response->json('message'));
                    }
                }
            } catch (\Throwable $th) {
                return back()->with('error', $th);
            }
        }

        if (!empty($mahasiswa) && count($mahasiswa) > 0) {
            $wilayah_ujian = WilayahUjian::where('kode_upbjj', 17)->get();
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

        NumpangUjian::create([
            "nim" => $request['nim'],
            "nama" => $request['nama'],
            "prodi" => $request['prodi'],
            "ut_daerah_asal" => $request['ut_daerah_asal'],
            "ut_daerah_tujuan" => $request['ut_daerah_tujuan'],
            "wilayah_ujian_asal" => $request['wilayah_ujian_asal'],
            "wilayah_ujian_tujuan" => $request['wilayah_ujian_tujuan'],
            "tgl_pindah_lokasi" => $request['tgl_pindah_lokasi'],
            "matakuliah" => implode("|", $request['matakuliah']),
            "skema" => "UTM",
            "alasan" => $request['alasan'],
            "no_wa" => $request['no_wa'],
            "ttd" => $request['ttd'],
            "dokumen_pendukung_alasan" => $dokumen_pendukung_alasan,
            "status" => "Antrian",
        ]);
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

        NumpangUjian::create([
            "nim" => $request['nim'],
            "nama" => $request['nama'],
            "prodi" => $request['prodi'],
            "ut_daerah_asal" => $request['ut_daerah_asal'],
            "ut_daerah_tujuan" => $request['ut_daerah_tujuan'],
            "wilayah_ujian_asal" => $request['wilayah_ujian_asal'],
            "wilayah_ujian_tujuan" => $request['wilayah_ujian_tujuan'],
            "tgl_pindah_lokasi" => $request['tgl_pindah_lokasi'],
            "matakuliah" => implode("|", $request['matakuliah']),
            "skema" => "UTM",
            "alasan" => $request['alasan'],
            "no_wa" => $request['no_wa'],
            "ttd" => $request['ttd'],
            "surat_pengantar" => $surat_pengantar,
            "status" => "Antrian",
        ]);
        return redirect()->route("status.numpang_ujian", $request['nim'])->with("success", "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }

    public function matakuliah()
    {
        $data = Matakuliah::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Matakuliah',
            'active' => 'Numpang Ujian',
            'data' => $data->paginate(10),
        ];
        return view('admin.aplikasi.numpang_ujian.matakuliah', $master);
    }
    public function wilayah()
    {
        $data = WilayahUjian::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Wilayah Ujian',
            'active' => 'Numpang Ujian',
            'data' => $data->paginate(10),
        ];
        return view('admin.aplikasi.numpang_ujian.wilayah_ujian', $master);
    }
    public function peserta()
    {
        $data = PesertaUjian::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Peserta Ujian',
            'active' => 'Numpang Ujian',
            'data' => $data->paginate(10),
        ];
        return view('admin.aplikasi.numpang_ujian.peserta_ujian', $master);
    }

    public function matakuliah_import(Request $request)
    {
        Excel::import(new MatakuliahImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
    public function wilayah_ujian_import(Request $request)
    {
        Excel::import(new WilayahUjianImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.wilayah_ujian')->with('success', 'Data wilayah ujian berhasil disimpan kedalam server!');
    }
    public function peserta_ujian_import(Request $request)
    {
        // for($i=0;$i<5000;$i++){

        // }
        // return back();
        Excel::import(new PesertaUjianImport(), $request['file']);
        return redirect()->route('admin.numpang_ujian.peserta_ujian')->with('success', 'Data peserta ujian berhasil disimpan kedalam server!');
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
