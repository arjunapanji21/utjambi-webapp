<?php

namespace App\Http\Controllers;

use App\Imports\PendaftaranWisudaImport;
use App\Imports\WisudawanImport;
use App\Models\PendaftaranWisuda;
use App\Models\Wisudawan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WisudaController extends Controller
{
    public function index(){
        app('App\Http\Controllers\HomepageController')->visitor();
        $props = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
        ];
        return view('homepage.kegiatan.wisuda', $props);
    }

    public function pendaftaran_wisuda(Request $request){
        app('App\Http\Controllers\HomepageController')->visitor();
        $request->validate([
            'nim' => 'required'
        ]);
        $calon_wisuda = PendaftaranWisuda::where('nim', $request['nim'])->first();
        $props = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
            'calon_wisuda' => $calon_wisuda
        ];
        if($calon_wisuda == null){
            return back()->with('alert', 'NIM yang anda masukkan belum terdaftar pada Yudisium saat ini.');
        }
        return view('homepage.kegiatan.pendaftaran_wisuda', $props);
    }

    public function upload_bukti_bayar_wisuda(Request $request){
        app('App\Http\Controllers\HomepageController')->visitor();
        $request->validate([
            'file' => 'required'
        ]);
        $file = $request->file('file');
        $extension = $file->extension();
        $folder = public_path('uploads/wisuda/bukti_bayar/');
        $filename = $request['nim'] . "_bukti_bayar." . $extension;
        $file->move($folder, $filename);
        $bukti_pembayaran = $filename;
        $calon_wisuda = PendaftaranWisuda::where('nim', $request['nim'])->first();
        $calon_wisuda->bukti_pembayaran = $bukti_pembayaran;
        $calon_wisuda->tgl_upload_bukti = date(now());
        if($request->has('ikut_seminar')){
            $calon_wisuda->ikut_seminar = $request['ikut_seminar'];
        }
        $calon_wisuda->save();
        return back()->with('success', 'Berhasil mengupload bukti pembayaran LIP wisuda');
    }

    public function tolak_bukti_bayar_wisuda(Request $request){
        $request->validate([
            'keterangan' => 'required'
        ]);
        $calon_wisuda = PendaftaranWisuda::where('nim', $request['nim'])->first();
        $calon_wisuda->keterangan = $request['keterangan'];
        $calon_wisuda->bukti_pembayaran = null;
        $calon_wisuda->tgl_upload_bukti = null;
        $calon_wisuda->save();
        return back()->with('success', 'Data berhasil di update.');
    }

    public function konfirmasi_pendaftaran_wisuda($id){
        $calon_wisuda = PendaftaranWisuda::find($id);
        $calon_wisuda->konfirmasi_lip = 1;
        $calon_wisuda->tgl_konfirmasi = date(now());
        $calon_wisuda->save();
        return back()->with('success', "Data berhasil di update.");
    }

    public function cari_data_wisudawan(){
        app('App\Http\Controllers\HomepageController')->visitor();
        $master = [
            'title' => 'Wisuda UT Jambi',
            'active' => 'Wisuda',
        ];
        return view('wisuda', $master);
    }

    public function pendaftaran(){
        $master = [
            'title' => 'Pendaftaran Wisuda UT Jambi',
            'active' => 'Wisuda',
            'wisudawan' => PendaftaranWisuda::orderBy('updated_at', 'desc')->get(),
        ];
        return view('admin.aplikasi.wisuda.pendaftaran_wisuda', $master);
    }

    public function import_calon_wisuda(Request $request){
        // PendaftaranWisuda::truncate();
        Excel::import(new PendaftaranWisudaImport(), $request['file']);
        return redirect(route('admin.wisuda.pendaftaran'))->with('success', 'Data Calon Wisudawan Berhasil Di Upload!');
    }

    public function peserta(){
        $master = [
            'title' => 'Peserta Wisuda',
            'active' => 'Wisuda',
            'wisudawan' => Wisudawan::orderBy('id', 'asc')->get(),
        ];
        return view('admin.aplikasi.wisuda.peserta_wisuda', $master);
    }

    public function detail_peserta(Request $request){
        app('App\Http\Controllers\HomepageController')->visitor();
        $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
        $master = [
            'title' => 'Peserta Wisuda',
            'active' => 'Wisuda',
            'wisudawan' => $wisudawan,
        ];
        return view('wisuda_show', $master);
    }

    public function import_peserta_wisuda(Request $request){
        $request['masa'] = $request['tahun']." ".$request['periode'];
        Excel::import(new WisudawanImport(
            $request['masa'], 
            $request['tgl_seminar'], 
            $request['waktu_seminar'],
            $request['tgl_wisuda'],
            $request['waktu_wisuda'],
            $request['lokasi'],
            $request['gmap']
        ), $request['file']);
        return redirect(route('admin.wisuda.peserta'))->with('success', 'Data Wisudawan Berhasil Di Upload!');
    }

    public function seminar_scan(Request $request){
        if($request->has('nim')){
            try {
                $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
                $wisudawan->absen_seminar = date(now());
                $wisudawan->save();
                $master = [
                    'title' => 'SEMINAR UT JAMBI',
                    'active' => 'Wisuda',
                    'wisudawan' => $wisudawan,
                    'data' => Wisudawan::all(),
                    'hadir' => Wisudawan::where('absen_seminar', '!=', NULL)->get(),
                ];
                return view('scan_seminar', $master);
            } catch (\Throwable $th) {
                return back();
            }
        }else{
            $master = [
                'title' => 'SEMINAR UT JAMBI',
                'active' => 'Wisuda',
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('absen_seminar', '!=', NULL)->get(),
            ];
            return view('scan_seminar', $master);
        }
    }

    public function wisuda_scan(Request $request){
        if($request->has('nim')){
           try {
            $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
            $wisudawan->absen_wisuda = date(now());
            $wisudawan->save();
            $master = [
                'title' => 'WISUDA UT JAMBI',
                'active' => 'Wisuda',
                'wisudawan' => $wisudawan,
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('absen_wisuda', '!=', NULL)->get(),
            ];
            return view('scan_wisuda', $master);
           } catch (\Throwable $th) {
            return back();
           }
        }else{
            $master = [
                'title' => 'WISUDA UT JAMBI',
                'active' => 'Wisuda',
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('absen_wisuda', '!=', NULL)->get(),
            ];
            return view('scan_wisuda', $master);
        }
    }
}
