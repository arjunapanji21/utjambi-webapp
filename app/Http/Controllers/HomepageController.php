<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Official Website UT Jambi',
            'posts' => Post::orderBy('date', 'desc')->limit(4)->get(),
        ];
        return view('homepage.home', $props);
    }
}
