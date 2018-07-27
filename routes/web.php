<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/home', 'HomeController@index')->name('homeguest');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/list/pdf','HomeController@generateTripHistoryPDF')->name('userlistPdf');

Route::get('/vehicles/list/pdf', 'VehiclesReportsController@index');

Route::get('/drivers/list/pdf', 'DriversReportController@index');

Route::get('/{any}', 'HomeController@index')->where('any', '.*');

