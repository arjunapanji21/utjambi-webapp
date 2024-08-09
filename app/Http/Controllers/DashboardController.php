<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $master = [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
            'jumlah_artikel' => count(Post::all()),
            'posts' => Post::orderBy('date', 'desc')->limit(5)->get(),
        ];
        return view('admin.dashboard', $master);
    }
}
