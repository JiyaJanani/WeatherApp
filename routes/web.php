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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', 'CRUDController@index' );
Route::get('/home', function () {
    return view('home');
});
Route::resource('crud', 'CRUDController');
Route::post('store_user', 'CRUDController@store');
Route::post('checkLogin','CRUDController@isauth');
