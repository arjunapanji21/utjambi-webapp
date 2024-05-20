<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumpangUjianController extends Controller
{
    public function form_numpang_ujian(Request $request){
        if($request->has('nim')){
            dd($request['nim']);
        }else{
            $master = [
                'mahasiswa' => ''
            ];
            return view('forms.form_numpang_ujian', $master);
        }
    }
}
