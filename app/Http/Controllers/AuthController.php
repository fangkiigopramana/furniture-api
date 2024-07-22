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
            return redirect()->route('furni.home');
        };        
        Alert::error('Login Failed', 'Please check your credentials and try again');
        return redirect()->back()->withInput();
    }
    
    public function store(Request $request){
        $validated = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'password' => 'required|min:8',
        ]);
        if ($validated->fails()) {
            return redirect()->back()
                             ->withErrors($validated)
                             ->withInput();
        }
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($request->password),
        ]);
        $user->assignRole('buyer');
    
        Auth::login($user);    
        $request->session()->regenerate();
        Alert::success('Registration Successful', 'Welcome');
        return redirect()->route('furni.home');
    }
    
    public function logout(){
        Auth::logout();
        Alert::success('Logout Successful', 'See you again');
        return redirect()->route('login');
    }

}
