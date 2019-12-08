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

Route::get('/', function () {
    return view('informasipelatihan');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/homeedit', function () {
    return view('homeedit');
});

Route::get('/testdb', function () {
    DB::connection()->getPdo();
});

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
 
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('informasipelatihan', 'InformasiPelatihanController@informasipelatihan')->name('informasipelatihan');
Route::get('/input_data', 'InputController@input_data');
Route::post('/proses_input', 'InputController@proses_input');

Route::get('/upload', 'UploadController@upload');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::get('/show', 'UploadController@show');
Route::get('/selesaidaftar', 'UploadController@selesaidaftar');



Route::get('/show_data', 'InputController@show_data');



