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
Route::get('/api/cities/{name}/barangays', 'CitiesController@showCitiesAndBarangays');
Route::get('/api/cities/{name}', 			'CitiesController@showCitiesByName');
Route::get('/api/cities', 					'CitiesController');
Route::get('/api/cities/{id}/province', 	'CitiesController@showProvince');
Route::get('/api/provinces/{name}/cities', 'ProvincesController@showProvinceAndCities');
Route::get('/api/provinces/{name}', 		'ProvincesController@showProvinceByName');
Route::get('/api/provinces', 				'ProvincesController@showProvince');
Route::get('/api/provinces.city', 			'ProvincesController');
Route::get('/', 'HomeController@showWelcome');