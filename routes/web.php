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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/posts', 'PostController@index')->name('posts');
Route::post('/posts', 'PostController@store')->name('post');
Route::get('/profil', 'ProfilController@edit')->name('profil');
Route::post('/update', 'ProfilController@update')->name('updateProfil');
Route::get('/userProfil', 'ProfilController@index')->name('userProfil');
Route::get('/usersProfil/{id}', 'ProfilController@show')->name('usersProfil');

