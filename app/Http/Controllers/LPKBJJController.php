<?php

namespace App\Http\Controllers;

use App\Imports\DataWTKUImport;
use App\Models\WTKU;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class LPKBJJController extends Controller
{
    public function osmb_pkbjj(){
        $props = [
            'title' => 'OSMB-PKBJJ',
            'active' => 'LPKBJJ',
        ];
        return view('admin.aplikasi.lpkbjj.osmb_pkbjj', $props);
    }

    public function osmb_pkbjj_import(Request $request){
        return back()->with('success', 'Data OSMB-PKBJJ berhasil di import.');
    }

    public function wt_ku(){
        $props = [
            'title' => 'WT-KU',
            'active' => 'LPKBJJ',
            'data' => WTKU::orderBy('lokasi', 'asc')->orderBy('tanggal', 'asc')->get(),
        ];
        return view('admin.aplikasi.lpkbjj.wt_ku', $props);
    }

    public function wt_ku_import(Request $request){
        WTKU::truncate();
        Excel::import(new DataWTKUImport(), $request['file']);
        return back()->with('success', 'Data WT-KU berhasil di import.');
    }
}
