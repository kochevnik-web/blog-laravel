<?php

namespace App\Http\Controllers;

use App\Post;
use App\Country;
use App\City;

class HomeController extends Controller
{
    public function index()
    {
        // $data = Country::all();
        // $data = Country::where('Code', '<', 'ALB')->select('Code', 'Name')->offset(1)->limit(2)->get();
        // $data = City::find(5);
        $data = Country::find('AGO');

        dd($data);

        return view('home', ['var' => 5, 'name' => 'John']);
    }

    public function test()
    {
        return __METHOD__;
    }
}