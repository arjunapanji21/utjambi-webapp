<?php

namespace App\Http\Controllers;

use App\Models\CekJadwalTutorial;
use App\Models\DataPesertaTutorial;
use App\Models\Matakuliah;
use App\Models\NumpangUjian;
use App\Models\PesertaOsmbPkbjj;
use App\Models\Post;
use App\Models\Token;
use App\Models\Visitor;
use App\Models\WilayahUjian;
use App\Models\WTKU;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

class HomepageController extends Controller
{
    function visitor(){
        $visitor = Visitor::where('ip_add', request()->ip())->first();
        if(is_null($visitor)){
            $visitor = new Visitor;
            $visitor->ip_add = request()->ip();
            $visitor->visits = 1;
            $visitor->last_visit_url = request()->url();
            $visitor->save();
        }else{
            $visitor->visits = $visitor->visits + 1;
            $visitor->last_visit_url = request()->url();
            $visitor->save();
        }
    }

    public function index(){
        $this->visitor();
        $props = [
            'title' => 'Official Website UT Jambi',
            'posts' => Post::where('status', 'publish')->orderBy('date', 'desc')->limit(6)->get(),
        ];
        return view('homepage.home', $props);
    }

    public function profil_direktur(){
        $this->visitor();
        $props = [
            'title' => 'Direktur',
        ];
        return view('homepage.profil.direktur', $props);
    }

    public function pimpinan_staf(){
        $this->visitor();
        $props = [
            'title' => 'Pimpinan & Staf',
        ];
        return view('homepage.profil.staf', $props);
    }

    public function visi_misi(){
        $this->visitor();
        $props = [
            'title' => 'Visi & Misi',
        ];
        return view('homepage.profil.visi_misi', $props);
    }

    public function blog(){
        $this->visitor();
        $props = [
            'title' => 'Blog',
            'posts' => Post::where('status', 'publish')->orderBy('date', 'desc')->get(),
        ];
        return view('homepage.blog', $props);
    }

    public function osmb_pkbjj(){
        $this->visitor();
        $props = [
            'title' => 'OSMB & PKBJJ',
        ];
        return view('homepage.kegiatan.osmb_pkbjj', $props);
    }

    public function osmb_pkbjj_show(Request $request){
        $this->visitor();
        $data = PesertaOsmbPkbjj::where('nim', $request['nim'])->get()->first();
        $props = [
            'title' => 'OSMB & PKBJJ',
            'data' => $data,
        ];
        return view('homepage.kegiatan.osmb_pkbjj_show', $props);
    }

    public function osmb_pkbjj_konfirmasi($id, Request $request){
        $this->visitor();
        $data = PesertaOsmbPkbjj::find($id);
        $data->hadir_osmb = $request['hadir_osmb'];
        $data->hadir_pkbjj = $request['hadir_pkbjj'];
        $data->save();
        return back()->with('success', "Konfirmasi kehadiran berhasil disimpan!");
    }

    public function wt_ku(Request $request){
        $this->visitor();
        $props = [
            'title' => 'WT-KU',
            'data' => WTKU::orderBy('tanggal', 'asc')->orderBy('lokasi', 'asc')->orderBy('kelas', 'asc')->orderBy('nama', 'asc')->get(),
        ];
        return view('homepage.kegiatan.wt_ku', $props);
    }

    public function pembayaran_spp(){
        $this->visitor();
        $props = [
            'title' => 'Pembayaran SPP',
        ];
        return view('homepage.mahasiswa.pembayaran_spp', $props);
    }

    public function jadwal_perkuliahan(Request $request) {
        $this->visitor();
        if($request->has('input')){
            if(strlen($request['input']) == 8){
                $data = CekJadwalTutorial::where('kode_tutor', $request['input'])->get();

                if(count($data) <= 0){
                    return back()->with('alert', 'Kode yang dimasukkan salah atau tidak terdaftar pada sistem.');
                }

                $tutor['kode'] = $data[0]->kode_tutor;
                $tutor['nama'] = $data[0]->nama_tutor;

                $props = [
                    'title' => 'Cek Jadwal Tutorial',
                    'active' => 'Tutorial',
                    'data' => $data->groupBy('kode_kelas'),
                    'guest' => 'tutor',
                    'tutor' => $tutor,
                ];
            }
            else if(strlen($request['input']) == 9){
                $data = CekJadwalTutorial::where('nim', $request['input'])->get();

                if(count($data) <= 0){
                    return back()->with('alert', 'Kode yang dimasukkan salah atau tidak terdaftar pada sistem.');
                }

                $props = [
                    'title' => 'Cek Jadwal Tutorial',
                    'active' => 'Tutorial',
                    'data' => $data,
                    'guest' => 'mahasiswa',
                ];
            }else{
                return back()->with('alert', 'Kode yang dimasukkan salah atau tidak terdaftar pada sistem.');
            }
        }else{
            $props = [
                'title' => 'Cek Jadwal Tutorial',
                'active' => 'Tutorial',
            ];
        }
        return view('homepage.mahasiswa.jadwal_perkuliahan', $props);
    }

    public function download_pemberkasan($kode_kelas){
        $pemberkasan = public_path('docs/tutor/pemberkasan/');
        $filesInFolder = File::allFiles($pemberkasan);
        foreach ($filesInFolder as $path) {
            $files = pathinfo($path);
            if(explode(' @ ', $files['basename'])[1] == $kode_kelas.'.xls'){
                $file = $pemberkasan.$files['basename'];
                return response()->download($file);
            }
        }
    }

    public function download_file($folder, $nama_file){
        $file = public_path("docs/".$folder."/".$nama_file);
        return response()->download($file);
    }

    public function ujian(){
        $this->visitor();
        $props = [
            'title' => 'Numpang Ujian',
        ];

        return view('homepage/mahasiswa/ujian', $props);
    }

    public function numpang_utm(Request $request){
        $this->visitor();
        if($request->has('nim')){
            $cekNumpang = NumpangUjian::where('nim', $request['nim'])->latest()->first();
            if(is_null($cekNumpang)){
                $token = Token::where('nama', 'SRS')->get()->first()->token;
                // get masa aktif
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $token,
                    'Accept' => 'application/json',
                ])->get('https://api-mahasiswa-srs.ut.ac.id/api-srs-mahasiswa/v1/masa-aktif?kodeKegiatan=AKRG');
                if ($response->status() == 200) {
                    $masa = $response->json('data')['masa'];
                    if($masa[-1] == "2"){
                        $masa[-1] = $masa[-1]-1;
                    }else{
                        $masa[-2] = $masa[-2]-1;
                        $masa[-1] = 2;
                    }
                    $response = Http::withHeaders([
                        'Authorization' => 'Bearer ' . $token,
                        'Accept' => 'application/json',
                    ])->get('https://api-mahasiswa-srs.ut.ac.id/api-srs-mahasiswa/v1/data-matakuliah?nim=' . $request['nim'] . '&masa='.$masa);
                    if ($response->status() == 200) {
                        $result = $response->json('data')[0];
                        $data['masa'] = $masa;
                        $data['nim'] = $result['nim'];
                        $data['nama_mahasiswa'] = $result['nama_mahasiswa'];
                        $data['kode_upbjj'] = $result['info_ut']['upbjj']['kode_upbjj'];
                        $data['nama_upbjj'] = $result['info_ut']['upbjj']['nama_upbjj'];
                        $data['alamat_upbjj'] = $result['info_ut']['upbjj']['alamat_upbjj'];
                        $data['nomor_telepon_upbjj'] = $result['info_ut']['upbjj']['nomor_telepon_upbjj'];
                        $data['email_upbjj'] = $result['info_ut']['upbjj']['email_upbjj'];
                        $data['kode_prodi'] = $result['info_ut']['program_studi']['kode_program_studi'];
                        $data['nama_prodi'] = $result['info_ut']['program_studi']['nama_program_studi'];
                        $data['fakultas'] = $result['info_ut']['program_studi']['fakultas']['nama_fakultas'];
                        $data['billing'] = $result['billing'];
                        $data['kode_mk'] = [];
                        foreach($data['billing'] as $billing){
                            foreach($billing['billing_detail'] as $row){
                                array_push($data['kode_mk'], $row['mata_kuliah']['kode_matakuliah']);
                            }
                        }
                    } else if ($response->status() != 200) {
                        return back()->with('error', $response->json('message'));
                    }
                } else if ($response->status() != 200) {
                    return back()->with('error', $response->json('message'));
                }
                $data['mk_utm'] = [];
                foreach($data['kode_mk'] as $kode_mk){
                    $mk = Matakuliah::where('kode', $kode_mk)->first();
                    if($mk->skema == "UTM"){
                        array_push($data['mk_utm'], $kode_mk);
                    }
                }
                if($data['kode_upbjj'] == "17"){
                    $wilayah_ujian = WilayahUjian::where('aktif', true)->orderBy('nama_upbjj')->get();
                }else{
                    $wilayah_ujian = WilayahUjian::where('aktif', true)->where('kode_upbjj', "17")->orderBy('nama_wilayah_ujian')->get();
                }
                $props = [
                    'title' => 'Ujian',
                    'wilayah_ujian' => $wilayah_ujian,
                    'mahasiswa' => $data
                ];
            }else{
                return redirect(route('status.numpang_ujian', $request['nim']));
            }
            
        }else{
            $props = [
                'title' => 'Pengajuan Numpang Ujian',
            ];
        }

        return view('homepage/mahasiswa/numpang_utm', $props);
    }

    public function submit_numpang_utm(Request $request){
        $request->validate([
            'lokasi_ujian_tujuan' => 'required',
            'alasan' => 'required',
            'ttd' => 'required',
            'no_wa' => 'required|min:9|max:15',
        ]);

        if ($request->has('file')) {
            $request->validate([
                'file' => 'required|file|max:5120', // 5120 KB = 5 MB
            ]);
            $file = $request->file('file');
            $folder = public_path('uploads/numpang_ujian/');
            if($request['upbjj_asal'] == "17 / JAMBI"){
                $file->move($folder, $request['nim'] . "_dokumen_pendukung_alasan.pdf");
                $dokumen_pendukung_alasan = 'uploads/numpang_ujian/' . $request['nim'] . "_dokumen_pendukung_alasan.pdf";
            }else{
                $file->move($folder, $request['nim'] . "_surat_pengantar.pdf");
                $surat_pengantar = 'uploads/numpang_ujian/' . $request['nim'] . "_surat_pengantar.pdf";
            }
        }

        $upbjj_tujuan = WilayahUjian::find($request['lokasi_ujian_tujuan']);

        $cekNumpang = NumpangUjian::where('nim', $request['nim'])->latest()->first();

        if(is_null($cekNumpang)){
            $numpang = new NumpangUjian();
            $numpang->masa = $request['masa'];
            $numpang->nim = $request['nim'];
            $numpang->nama = $request['nama'];
            $numpang->prodi = $request['prodi'];
            $numpang->ut_daerah_asal = $request['upbjj_asal'];
            $numpang->ut_daerah_tujuan = $upbjj_tujuan->kode_upbjj . " / " . $upbjj_tujuan->nama_upbjj;
            $numpang->wilayah_ujian_asal = "-";
            $numpang->wilayah_ujian_tujuan = $upbjj_tujuan->kode_wilayah_ujian . " / " . $upbjj_tujuan->nama_wilayah_ujian . " " . $upbjj_tujuan->lokasi_utm;
            $numpang->tgl_pindah_lokasi = $request['tgl_pindah_lokasi'];
            $numpang->matakuliah = $request['mk_utm'];
            $numpang->skema = "UTM";
            $numpang->alasan = $request['alasan'];
            $numpang->no_wa = $request['no_wa'];
            $numpang->ttd = $request['ttd'];
            if($request['upbjj_asal'] == "17 / JAMBI"){
                $numpang->dokumen_pendukung_alasan = $dokumen_pendukung_alasan;
            } else {
                $numpang->surat_pengantar = $surat_pengantar;
            }
            $numpang->status = "Antrian";
            $numpang->save();
        }
        return redirect(route('status.numpang_ujian', $request['nim']))->with('success', "Form numpang ujian berhasil di submit dan sedang dalam antrian.");
    }
}
