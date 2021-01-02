<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class ContactController extends Controller
{
    public function send(Request $request) {

        if ($request->method() == 'POST'){
            $body =  "<p><strong>Имя: </strong>{$request->input('name')}</p>";
            $body .= "<p><strong>E-mail: </strong>{$request->input('email')}</p>";
            $body .= "<p><strong>Сообщение: </strong><br>" . nl2br( $request->input('text') ) . "</p>";

            Mail::to('test@test.ru')->send(new TestMail($body));
            $request->session()->flash('success', 'Сообщение отправлено');
            return redirect('/send');
        }


        $title = 'send mail';
        return view('send', compact('title'));
    }
}
