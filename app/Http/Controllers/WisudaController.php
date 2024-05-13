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
        return view('wisuda.peserta', $master);
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
}
