<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $title = "Registration new user";
        return view('auth.register', compact('title'));
    }
    
    public function store(Request $request)
    {
        dd($request->all());
        return redirect(route('auth.register'));
    }
}
