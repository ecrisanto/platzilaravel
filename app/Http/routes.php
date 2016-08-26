<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','HomeController@index');

Route::get('posts/{id}',
        ['uses' => 'PostController@show',
        'as' => 'post_show_path',
        ]);

//Route::get('posts/{id}', 'PostController@show');

//Route::get('/', function () {
//    return view('home');
//});
