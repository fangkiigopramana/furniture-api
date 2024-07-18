<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::success('Berhasil Masuk', 'Selamat Datang ' . Auth::user()->name . '!!');
            return redirect()->intended(route('dashboard'));
        }
        Alert::error('Gagal Login',  'Email atau password salah');
        return redirect()->back()->withInput($request->except('password'));
    }

    public function logout(){
        Auth::logout();
        Alert::success('Berhasil Keluar', 'Silahkan Login Kembali');
        return redirect()->route('login');
    }

    public function dashboard(){
        $user = Auth::user()->load('socialMedias', 'experiences');
        $experiences = $user->experiences->groupBy('company_name')->map(function ($group) {
            return ['company_name' => $group->first()->company_name, 'count' => $group->count()];
        });
        return view('admin.dashboard', compact('user','experiences'));

    }


    public function showPersonalIdentity(){
        return view('admin.personal-identity');
    }
}
