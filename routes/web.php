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

Route::get('/', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@store')->name('posts.store');
Route::get('/create', 'HomeController@create')->name('posts.create');

Route::get('/page/about', 'PageController@show')->name('pages.about');

Route::fallback(function () {
    // return redirect()->route('home');
    abort(404, 'Oops, Page not found...');
});

// Route::get('/send', 'ContactController@send')->name('send');
Route::match(['get', 'post'], '/send', 'ContactController@send')->name('send');

Route::get('/register', 'UserController@create')->name('auth.register.create');
Route::post('/register', 'UserController@store')->name('auth.register.store');

Route::get('/login', 'UserController@loginForm')->name('auth.login.create');
Route::post('/login', 'UserController@login')->name('auth.login');
Route::get('/logout', 'UserController@logout')->name('auth.logout');

Route::get('/admin', 'Admin\MainController@index')->middleware('admin')->name('admin.index');

