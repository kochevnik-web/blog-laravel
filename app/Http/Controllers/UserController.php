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
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $request->session()->flash('success', 'Регистрация прошла удачно');
        Auth::login($user);

        return redirect()->route('auth.register.create');
    }
}