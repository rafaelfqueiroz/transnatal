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

Route::get('/users/register', 'UsersController@register');

Route::get('/users/list', 'UsersController@lister');

Route::get('/employees/register', 'EmployeesController@register');

Route::get('/employees/list', 'EmployeesController@lister');

Route::get('/clients/register', 'ClientsController@register');

Route::get('/clients/list', 'ClientsController@lister');


//<======== END OF GET REGUESTS ========>

//<======== POST REQUESTS ========>

Route::post('/auth', 'AuthController@postLogin');

Route::post('/clients/store', 'ClientsController@store');

Route::post('/employees/store', 'EmployeesController@store');

Route::post('/users/store', 'UsersController@store');

//<======== END OF POST REQUESTS ========>