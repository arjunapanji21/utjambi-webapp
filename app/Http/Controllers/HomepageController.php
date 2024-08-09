<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Official Website UT Jambi',
            'posts' => Post::orderBy('date', 'desc')->limit(6)->get(),
        ];
        return view('homepage.home', $props);
    }

    public function profil_direktur(){
        $props = [
            'title' => 'Direktur',
        ];
        return view('homepage.profil.direktur', $props);
    }

    public function pimpinan_staf(){
        $props = [
            'title' => 'Pimpinan & Staf',
        ];
        return view('homepage.profil.staf', $props);
    }

    public function visi_misi(){
        $props = [
            'title' => 'Visi & Misi',
        ];
        return view('homepage.profil.visi_misi', $props);
    }

    public function blog(){
        $props = [
            'title' => 'Blog',
            'posts' => Post::orderBy('date', 'desc')->get(),
        ];
        return view('homepage.blog', $props);
    }
}
