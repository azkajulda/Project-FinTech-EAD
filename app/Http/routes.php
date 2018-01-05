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

Route::get('/', function () {
    return redirect('/home');
});
Route::auth();

Route::get('/login', function() {
	return view("auth.login");
})->name('login');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myTabungan','myTabunganController@tampil');
Route::post('/myTabungan/add','myTabunganController@tambah');
Route::get('/about','HomeController@about');



