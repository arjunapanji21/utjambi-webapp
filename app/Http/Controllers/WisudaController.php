<?php

namespace App\Http\Controllers;

use App\Imports\WisudawanImport;
use App\Models\Wisudawan;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class WisudaController extends Controller
{
    public function index(){
        $master = [
            'title' => 'Wisuda UT Jambi',
        ];
        return view('wisuda', $master);
    }

    public function peserta(){
        $master = [
            'title' => 'Peserta Wisuda',
            'wisudawan' => Wisudawan::orderBy('id', 'asc')->get(),
        ];
        return view('admin.aplikasi.wisuda.peserta_wisuda', $master);
    }

    public function detail_peserta(Request $request){
        $wisudawan = Wisudawan::where('nim', $request['nim'])->first();
        $master = [
            'title' => 'Peserta Wisuda',
            'wisudawan' => $wisudawan,
        ];
        return view('wisuda_show', $master);
    }

    public function import(Request $request){
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
                'data' => Wisudawan::all(),
                'hadir' => Wisudawan::where('absen_wisuda', '!=', NULL)->get(),
            ];
            return view('scan_wisuda', $master);
        }
    }
}
