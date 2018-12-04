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
    return view('auth/login');
});

Auth::routes();

Route::get('', 'NasabahController@index')->name('home');
Route::get('nasabah', 'NasabahController@index')->name('nasabah');
Route::get('nasabah/{id}', 'NasabahController@show')->name('nasabah.show');
Route::resource('debit', 'DebitController');
Route::resource('kredit', 'KreditController');
Route::get('kredit/{id}', 'KreditController@listlaporan')->name('kredit.listlaporan');
Route::resource('total', 'TotalController');