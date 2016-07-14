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
    return view('welcome');
});

Route::get('/code','User\LoginController@code');
Route::get('/seatEmpty','User\LoginController@seatEmpty');
Route::any('/user/login','User\LoginController@login');
Route::any('/user/register','User\RegisterController@register');
Route::get('/user/index','User\IndexController@index');
Route::any('/user/seatso','User\SeatsoController@seatso');
Route::any('/user/seatreport','User\SeatsoController@seatreport');


