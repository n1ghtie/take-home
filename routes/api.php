<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', 'ApiController@login');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('/user-details', 'ApiController@getUserdetails');
	Route::get('/vehicle-details/{user_id}', 'ApiController@getVehicleDetails');
});
