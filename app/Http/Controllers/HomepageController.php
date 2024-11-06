<?php

namespace App\Http\Controllers;

use App\Models\CekJadwalTutorial;
use App\Models\DataPesertaTutorial;
use App\Models\Post;
use App\Models\Visitor;
use App\Models\WTKU;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;

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

    public function osmb(){
        $this->visitor();
        $props = [
            'title' => 'OSMB',
        ];
        return view('homepage.kegiatan.osmb', $props);
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
        // return redirect()->route('maintenance');
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
}
