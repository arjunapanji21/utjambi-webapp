<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumpangUjianController extends Controller
{
    public function form_numpang_ujian(){
        return view('form_numpang_ujian');
    }
}
