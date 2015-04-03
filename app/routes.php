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
Route::get('/', 'HomeController@showWelcome');