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

Route::get('/', 'HomeController@home');

// Route :: get('/test/{angka}', function ($angka){
//     return view('test', ["angka" => $angka]);
// });

// Route::get('/halo/{nama}', function ($nama){
//     return "halo $nama";
// });

// Route::get('/form', 'RegisterController@form');

// Route::get('/sapa', 'RegisterController@sapa');
// Route::post('/sapa', 'RegisterController@sapa_post');

// Route::get('/', 'HomeController@home');

Route::get('/form', 'AuthController@form');
Route::get('/welcome', 'AuthController@welcome');
Route::post('/welcome', 'AuthController@welcome_post');

// Route::get('/welcome', 'AuthController@welcome');
