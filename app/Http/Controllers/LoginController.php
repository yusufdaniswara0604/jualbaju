<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        }

        return redirect()->back()->withInput()->withErrors(['loginError' => 'Username or password is incorrect.']);
    }
}
