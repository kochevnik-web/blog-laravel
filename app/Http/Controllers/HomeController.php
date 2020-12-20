<?php

namespace App\Http\Controllers;

use App\Post;

class HomeController extends Controller
{
    public function index()
    {

        $post = new Post;
        $post->title = 'Статья 1';
        $post->content = 'Контент статьи 1';
        $post->save();

        return view('home', ['var' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }
}