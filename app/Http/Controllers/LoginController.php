<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function halamanlogin(){
        return view('login.login',[
                'title' => 'Login',
                'active' => 'login'
        ]);
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login Failed!!!!!');
    }
}