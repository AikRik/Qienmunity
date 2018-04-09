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

//Route::get('/', function () {
//
//    return "ok";
// //   return view('home');
//});

use Illuminate\Http\Request;

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

Route::get('/profiel', function () {
    return view('profiel');
});

Route::get('/nieuwprofiel', function () {
    return view('nieuwprofiel');
});

Route::get('/profielgemaakt', function () {
    return view('profielgemaakt');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/verify', function () {
    return "testing posting";
});

Route::auth();


Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');

Route::resource('nieuwsposts','NieuwsController');

Route::resource('post','PostIdController');

Route::resource('communitypost','CommunityController');

Route::resource('profiles', 'ProfileController');



Route::get('/postman', function(){
    return "testing postman";
    });
Route::post('/postman', function(Request $request){
        $kip = $request->json()->all();
        return 'Postman goes '.$kip['geluid'];
    });
    