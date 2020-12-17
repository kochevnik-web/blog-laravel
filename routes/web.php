<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return '<h1>Hello, World!</h1>';
// });

Route::get('/', function () {
    $var  = 3 + 2;
    $name = 'John';
    // return view('home')->with('result', $var);
    // return view('home', ['result' => $var, 'name' => $name]);
    return view('home', compact('var', 'name'));
});

Route::get('/about', function () {
    return '<h1>About Page</h1>';
});

// Route::get('/contact', function () {
//     return view('contact');
// });

// Route::post('/send-email', function () {
//     if(!empty($_POST)) {
//         dump($_POST);
//     }
//     return 'Send Email!';
// });

// Route::match(['post', 'get'], '/contact', function () {
//     if(!empty($_POST)) {
//         dump($_POST);
//     }
//     return view('contact');
// });

Route::match(['post', 'get'], '/contacts', function () {
    if(!empty($_POST)) {
        dump($_POST);
    }
    return view('contact');
})->name('contact');

Route::redirect('/about', '/contacts', 301);
