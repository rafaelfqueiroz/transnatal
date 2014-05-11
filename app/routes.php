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


//<======== GET REQUESTS ========>


Route::get('/', 'AuthController@getLogin');

Route::get('/index', 'HomeController@index');

Route::get('/logout', 'AuthController@logout');

Route::get('/profile', 'UsersController@getProfile');


//<======== END OF GET REGUESTS ========>

//<======== POST REQUESTS ========>

Route::post('/auth', 'AuthController@postLogin');

//<======== END OF POST REQUESTS ========>

Route::resource('users', 'UsersController');
Route::resource('clients', 'ClientsController');
Route::resource('employees', 'EmployeesController');
Route::resource('vehicles', 'VehiclesController');
Route::resource('travels', 'TravelsController');