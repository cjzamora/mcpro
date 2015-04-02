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
Route::resource('/api/cities', 					'CitiesController');
Route::resource('/api/cities/{id}/province', 	'CitiesController@showProvince');
Route::resource('/api/provinces', 				'ProvincesController@showProvince');
Route::resource('/api/provinces.city', 			'ProvincesController');

Route::get('login', 'LoginController@index');
Route::post('login', 'LoginController@submit');
Route::get('logout', 'LoginController@logout');

/*ADMIN FACING ROUTES*/
Route::group(array('before' => 'auth'), function()
{
	Route::controller('admin', 'AdminController');
});

Route::get('/', 'HomeController@showWelcome');