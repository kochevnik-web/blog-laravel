<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {

        // $data = DB::table('country')->get();
        // $data = DB::table('country')->limit(2)->get();
        // $data = DB::table('country')->select('Code', 'Name', 'Region')->limit(2)->get();
        // $data = DB::table('country')->select('Code', 'Name', 'Region')->first();
        // $data = DB::table('country')->select('Code', 'Name', 'Region')->orderby('Code', 'desc')->first();
        // $data = DB::table('city')->select('ID', 'Name')->find(2);
        // $data = DB::table('city')->select('ID', 'Name')->where('ID', 2)->get();
        // $data = DB::table('city')->where('ID', '<', 5)->value('Name');
        // $data = DB::table('country')->limit(10)->pluck('Name', 'Code');

        // $data = DB::table('country')->count();
        // $data = DB::table('country')->max('Population');

        $data = DB::table('city')->select('city.ID', 'city.Name as city_name', 'country.Code', 'country.Name as coutnry_name')->limit(10)->join('country', 'city.CountryCode', '=', 'country.Code')->orderBy('city.ID')->get();

        dd($data);

        return '<h1>Home Page</h1>';
    }

    public function test()
    {
        return __METHOD__;
    }
}