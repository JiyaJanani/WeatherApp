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
    return view('welcome')
    ->with('login_errors', true);
});

Route::get('/login', function () {
    return view('login')
    ->with('login_errors',"");
});

Route::get('/register', 'CRUDController@index' );
Route::get('/home', 'HOMEController@index' );
Route::resource('crud', 'CRUDController');
Route::post('store_user', 'CRUDController@store');
Route::post('invalid','CRUDController@isauth');
Route::get('/weather', 'WeatherController@index' );
Route::get('forgotPassword', 'ForgotPasswordController@index' );
Route::get('contact', function()
{
    return View::make('pages.contact');
});

Route::post('homeRedirect', 'HOMEController@index' );
Route::post('getWeatherByCityName', 'HOMEController@getWeatherByCityName');