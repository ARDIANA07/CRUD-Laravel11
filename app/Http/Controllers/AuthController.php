<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function post_login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/home');
        } else {
            return back()->with('status', 'Email atau password salah!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}