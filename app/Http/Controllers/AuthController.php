<?php

namespace App\Http\Controllers;

use App\Models\Token;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $response = Http::post('https://api-srs.ut.ac.id/api-srs-mahasiswa/v1/auth', [
                // "email" => "ella.sunardi@ecampus.ut.ac.id",
                // "password" => "Sunardi1990"
                "email" => "api-testing-Bogor@ut.ac.id",
                "password" => "Terbuka132"
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
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('homepage'));
    }
}
