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


Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
	
	 $b = 1;
	 $a = 111;
	 $c = $a+$b;
    return view('test1');
});


*/

Route::get('/', 'ControladorPrueba@prueba');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
