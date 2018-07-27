<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth')->get('/vehicles', 'VehiclesController@index');

Route::middleware('auth')->get('/vehicles/{id}', 'VehiclesController@edit');

Route::middleware('auth')->post('/vehicles','VehiclesController@store');

Route::middleware('auth')->delete('/vehicles/{id}','VehiclesController@destroy');

Route::middleware('auth')->patch('/vehicles/{id}','VehiclesController@update');
