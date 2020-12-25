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
/* add verification email */
Auth::routes(['verify'=>true]);

//add verification to home
Route::get('/home', 'HomeController@index')->name('home')->Middleware('verified');
Route::get('/', function () {
    return view('welcome');
});