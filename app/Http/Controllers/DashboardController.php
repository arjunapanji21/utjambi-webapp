<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        // foreach(Post::all() as $row){
        //     $row->views = rand(55,110);
        //     $row->save();
        // }
        $totalViews = 0;
        foreach(Visitor::all() as $row){
            $totalViews += $row->visits;
        }
        $master = [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
            'jumlah_artikel' => count(Post::all()),
            'jumlah_pengunjung' => count(Visitor::all()),
            'pengunjung_hari_ini' => count(Visitor::where('created_at', 'like', '%' . date('Y-m-d') . '%')->get()),
            'total_views' => $totalViews,
            'visitors' => Visitor::orderBy('updated_at', 'desc')->limit(5)->get(),
            'posts' => Post::orderBy('views', 'desc')->limit(5)->get(),
        ];
        return view('admin.dashboard', $master);
    }
}
