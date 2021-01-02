<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    public function send() {

        Mail::to('test@test.ru')->send(new TestMail());

        $title = 'send mail';
        return view('send', compact('title'));
    }
}
