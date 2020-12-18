<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        // DB::insert("INSERT INTO post (content, text, created_at, updated_at) VALUES (:title, :content, :created_at, :updated_at)", ['title' => 'Статья 5', 'content' => 'Контент статьи 5', 'updated_at' => NOW(), 'created_at' => NOW()]);

        DB::update("UPDATE post SET created_at = :created_at, updated_at = :updated_at WHERE created_at IS NULL OR updated_at IS NULL", ['created_at' => NOW(), 'updated_at' => NOW()]);

        $posts = DB::select("SELECT * FROM post");
        return $posts;
    }

    public function test()
    {
        return __METHOD__;
    }
}