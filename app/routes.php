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
Route::get('news/unread', ['as' => 'news.unread', 'uses' => 'NewsController@unread', 'before' => 'auth']);
Route::get('news/notified', ['as' => 'news.notified', 'uses' => 'NewsController@notified', 'before' => 'auth']);
Route::get('news/news_viewed', ['as' => 'news.news_viewed', 'uses' => 'NewsController@news_viewed', 'before' => 'auth']);
Route::get('news/all_avaiable', ['as' => 'news.all_avaiable', 'uses' => 'NewsController@all_avaiable', 'before' => 'auth']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);

Route::get('/pdf', function()
{
    $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
    return PDF::load('Transnatal', 'A4', 'portrait')->show();
});

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
	Route::resource('news', 'NewsController');
});
