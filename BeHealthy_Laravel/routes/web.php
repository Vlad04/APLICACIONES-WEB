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

Route::get('/', "UserController@show" );

Route::get('/registro', function(){
	return view('registro');
});

Route::get('/logs', function(){
	return view('index');
});

Route::get('/logs/maps',  function(){
	return view('maps');
});

Route::post('/logs', "UserController@logs" );

Route::post('/store', "UserController@store" );
