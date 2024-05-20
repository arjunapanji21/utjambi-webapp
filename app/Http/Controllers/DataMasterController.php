<?php

namespace App\Http\Controllers;

use App\Imports\MatakuliahImport;
use App\Imports\PesertaUjianImport;
use App\Imports\WilayahUjianImport;
use App\Models\Matakuliah;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class DataMasterController extends Controller
{
    public function matakuliah(){
        $data = Matakuliah::orderBy('id', 'asc');
        $master = [
            'title' => 'Data Matakuliah',
            'active' => 'Master Data',
            'data' => $data->get(),
        ];
        return view('dashboard.matakuliah', $master);
    }

    public function matakuliah_import(Request $request){
        Excel::import(new MatakuliahImport(), $request['file']);
        return redirect()->route('admin.data.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
    public function wilayah_ujian_import(Request $request){
        Excel::import(new WilayahUjianImport(), $request['file']);
        return redirect()->route('admin.data.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
    public function peserta_ujian_import(Request $request){
        Excel::import(new PesertaUjianImport(), $request['file']);
        return redirect()->route('admin.data.matakuliah')->with('success', 'Data MK berhasil disimpan kedalam server!');
    }
}
