<?php

namespace App\Http\Controllers;

use App\Models\WebSetting;
use Illuminate\Http\Request;

class WebSettingController extends Controller
{
    public function index(){
        $props = [
            'title' => 'Web Setting',
            'setting' => WebSetting::find(1),
        ];
        return view('admin.setting', $props);
    }

    public function update(Request $request){
        $setting = WebSetting::find(1);
        if($request->has('maintenance')){
            $setting->maintenance = 1;
        }else{
            $setting->maintenance = 0;
        }
        $setting->save();
        return back()->with('success', 'Pengaturan Website Telah Di Update!');
    }
}
