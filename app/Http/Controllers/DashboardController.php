<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $master = [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
        ];
        return view('dashboard.index', $master);
    }
}
