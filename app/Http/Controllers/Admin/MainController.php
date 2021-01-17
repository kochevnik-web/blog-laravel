<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Tag;

class MainController extends Controller
{
    public function index()
    {

        /** Пример формирования слага с помощью встроенного функционала */
        //dd(Str::slug('Привет мир!'));

        return view('admin.index');
    }
}
