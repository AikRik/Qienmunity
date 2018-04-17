<?php

use Illuminate\Http\Request;




Route::auth();
Route::get('/', 'HomeController@index');

Route::group(['middleware' => 'auth'], function () {

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

    Route::get('/nieuwegebruiker', function () {
        return view('auth/register');
    });


    Route::post('/contactMail', 'ContactController@sendContact');

    Route::post('/zoek', 'NieuwsController@update');

    Route::get('/home','HomeController@index');
    
    Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);

    Route::resource('nieuwsposts','NieuwsController');

    Route::resource('profiles', 'ProfileController');

    Route::get('/myprofile','ProfileController@myProfile' );

    Route::resource('post','PostIdController');

    Route::resource('communitypost','CommunityController');

    Route::resource('profiles', 'ProfileController');

    Route::get('testauth', 'testController@auth');  


    Route::get('/munityimage/{filename}', [
        'uses' => 'CommunityController@getUserImage',
        'as' => 'community.image'
    ]);

    Route::get('/profileimage/{filename}', [
        'uses' => 'ProfileController@getUserImage',
        'as' => 'profile.image'
    ]);

    Route::get('/auth/success', [
        'uses' => 'Auth\AuthController@success',
        'as'   => 'auth.success'
    ]);
});