<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginAuthController extends Controller
{
    public function login(){
        return view('auth.login');
    }

    public function authentication(Request $request){
        $credential = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }

        return back()->with('loginErrors', 'Login Failed! Please Check Again');

    }

    public function out(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
