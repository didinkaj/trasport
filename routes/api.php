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

//vehicles routes
Route::middleware('auth')->get('/vehicles', 'VehiclesController@index');

Route::middleware('auth')->get('/vehicles/{id}', 'VehiclesController@edit');

Route::middleware('auth')->post('/vehicles','VehiclesController@store');

Route::middleware('auth')->delete('/vehicles/{id}','VehiclesController@destroy');

Route::middleware('auth')->patch('/vehicles/{id}','VehiclesController@update');

//drivers route
Route::middleware('auth')->get('/drivers', 'DriversController@index');

Route::middleware('auth')->get('/drivers/{id}', 'DriversController@edit');

Route::middleware('auth')->post('/drivers','DriversController@store');

Route::middleware('auth')->delete('/drivers/{id}','DriversController@destroy');

Route::middleware('auth')->patch('/drivers/{id}','DriversController@update');

//booking routes
Route::middleware('auth')->get('/bookings', 'ReserveController@index');

Route::middleware('auth')->get('/bookings/{id}', 'ReserveController@edit');

Route::middleware('auth')->post('/bookings','ReserveController@store');

Route::middleware('auth')->delete('/bookings/{id}','ReserveController@destroy');

Route::middleware('auth')->patch('/bookings/{id}','ReserveController@update');

//events routes
Route::middleware('auth')->get('/events', 'EventController@index');

Route::middleware('auth')->get('/events/count', 'EventController@countEvents');

Route::middleware('auth')->get('/events/{id}', 'Eventontroller@edit');

Route::middleware('auth')->post('/events','EventController@store');

Route::middleware('auth')->delete('/events/{id}','EventController@destroy');

Route::middleware('auth')->patch('/events/{id}','EventController@update');