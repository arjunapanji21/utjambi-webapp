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

    public function direktur(){
        $props = [
            'title' => 'Direktur UT Jambi',
        ];
        return view('homepage.profil.direktur', $props);
    }

    public function manajer_administrasi(){
        $props = [
            'title' => 'Manajer UT Jambi',
        ];
        return view('homepage.profil.manajer_administrasi', $props);
    }

    public function manajer_marketing(){
        $props = [
            'title' => 'Manajer UT Jambi',
        ];
        return view('homepage.profil.manajer_marketing', $props);
    }

    public function manajer_pembelajaran(){
        $props = [
            'title' => 'Manajer UT Jambi',
        ];
        return view('homepage.profil.manajer_pembelajaran', $props);
    }

    public function staf(){
        $props = [
            'title' => 'Staf UT Jambi',
        ];
        return view('homepage.profil.staf', $props);
    }
}
