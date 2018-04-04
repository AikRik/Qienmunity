<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|'hj
*/

Route::get('/', function () {

    return "ok";
 //   return view('home');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/nieuws', function () {
    return view('nieuws');
});

Route::get('/resources', function () {
    return view('resources');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/verify', function () {
    return "testing posting";

});

Route::auth();

Route::get('/home', 'HomeController@index');
