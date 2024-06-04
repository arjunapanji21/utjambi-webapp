<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $props = [
            'Official Website UT Jambi'
        ];
        return view('homepage.index', $props);
    }
}
