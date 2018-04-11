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

Route::get('/', 'DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/users', 'UserController@index');
Route::get('/users/{user}', 'UserController@show');
Route::get('/users/search/{query}', 'UserController@search');
Route::delete('/users/{user}', 'UserController@destroy');

Route::get('/tracks', 'TrackController@index');
Route::get('/tracks/{track}', 'TrackController@show');

Route::get('/vehicles', 'VehicleController@index');
Route::get('/vehicles/{vehicle}', 'VehicleController@show');
