<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        $title = "Registration new user";

        return view('auth.register', compact('title'));
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'avatar'   => 'nullable|image'
        ]);

        dd($request->all());

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $request->session()->flash('success', 'Регистрация прошла удачно');
        Auth::login($user);

        return redirect()->route('auth.register.create');
    }

    public function loginForm() {

        $title = 'Login Page';
        return view('auth.login', compact('title'));
    }

    public function login(Request $request) {
        // dd($request->all());

        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            return redirect()->home();
        }

        return redirect()->back()->with('error', 'Логин или пароль не верны');
    }

    public function logout() {

        Auth::logout();
        return redirect()->route('auth.login');

    }
}
