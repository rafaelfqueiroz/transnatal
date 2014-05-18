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

Route::get('login', ['as' => 'sessions.login', 'uses' => 'SessionsController@create', 'before' => 'guest']);
Route::get('logout', ['as' => 'sessions.logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::group(['before' => 'auth'], function()
{
	Route::get('/index', 'HomeController@index');
	Route::get('/profile', 'UsersController@getProfile');
	Route::resource('users', 'UsersController');
	Route::resource('clients', 'ClientsController');
	Route::resource('employees', 'EmployeesController');
	Route::resource('vehicles', 'VehiclesController');
	Route::resource('travels', 'TravelsController');
	Route::resource('travels-rented-car', 'TravelsRentedCarController');
});
