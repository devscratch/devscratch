<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
* An Authenticate Routes.
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/mastah/{nickname}', ['uses' => 'MastahController@index'])->middleware('login');
Route::get('/m', function(){
  return view('mastah');
})->middleware('login');

Route::get('/auth/{provider}', ['uses' => 'SocialAuthController@index'])->middleware('social');
Route::get('/auth/callback/{provider}', ['uses' => 'SocialAuthController@handleProviderCallback'])->middleware('social');

/*
* End!
*/

Route::get('/home', 'HomeController@index');

Route::get('/so', function(){
  return view('oo');
});

Route::get('/example', function(){
  return view('example');
})->middleware('login');
