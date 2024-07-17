<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login (){
        return view('admin.login');
    }

    public function auth(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard'))->with('success', 'Selamat Datang');
        }
        return back()->withErrors([
            'error' => 'Kredensial tidak valid atau pengguna tidak ditemukan.',
        ])->withInput();
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login')->with('logoutSuccess', "Berhasil keluar, silahkan masuk kembali!");
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function showPersonalIdentity(){
        return view('admin.personal-identity');
    }
}
