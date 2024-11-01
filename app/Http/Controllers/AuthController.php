<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login(){
        app('App\Http\Controllers\HomepageController')->visitor();
        if(!Auth::check()){
            $props = [
                'title' => "Login",
            ];
            return view('auth.login', $props);
        }

        return redirect()->route('admin.dashboard');
    }

    public function reset_password(){
        $props = [
            'title' => "Reset Password",
        ];
        return view('auth.reset_password', $props);
    }
    
    public function auth(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $response = Http::post('https://api-srs.ut.ac.id/api-srs-mahasiswa/v1/auth', [
                // "email" => "ella.sunardi@ecampus.ut.ac.id",
                // "password" => "Sunardi1990"
                "email" => "jambi@ecampus.ut.ac.id",
                "password" => "UT176tJ4mb!!rf"
            ]);
            $result = $response->json();
            try {
                $token = Token::where('nama', 'SRS')->get()->first();
                $token->token = $result['token'];
                $token->save();
            } catch (\Throwable $th) {
                //throw $th;
                Token::create([
                    'nama' => 'SRS',
                    'token' => $result['token'],
                ]);
            }
            $request->session()->regenerate();
            return redirect(route('admin.dashboard'));
        }
        return back()->with(['error', 'Login failed!']);
    }

    public function logout(Request $request)
    {
        app('App\Http\Controllers\HomepageController')->visitor();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('homepage'));
    }
}
