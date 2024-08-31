<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;


class AuthController extends Controller
{
    public function form(){
        return view('auth.form');
    }

    public function validate(Request $request){
        $validated = $request->validate([
            'email' => 'required|email:rfc,dns',
            'password' => 'required|min:8',
        ]);

        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            Alert::success('Login Success', 'Welcome');
            return redirect()->route('home');
        };        
        Alert::error('Login Failed', 'Please check your credentials and try again');
        return redirect()->back()->withInput();
    }

    

    public function logout(){
        Auth::logout();
        Alert::success('Logout Successful', 'See you again');
        return redirect()->route('login');
    }

    public function getAllUser(){
        $users = User::all();
        return $users->json_encode();
    }
}
