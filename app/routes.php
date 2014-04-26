<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'AuthController@getLogin');

Route::post('/auth', 'AuthController@postLogin');

Route::get('/index', 'HomeController@index');

Route::get('/logout', 'AuthController@logout');

Route::get('/profile', 'UsersController@getProfile');