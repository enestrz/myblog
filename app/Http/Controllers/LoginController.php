<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function create(){
        return view('login.create');
    }

    public function store(){
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(Auth::attempt($attributes)){
            request()->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function destroy(){
        auth()->logout();
        return redirect('/');
    }
}
