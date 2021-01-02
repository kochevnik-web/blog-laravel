<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send() {

        $title = 'send mail';
        return view('send', compact('title'));
    }
}
