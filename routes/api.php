<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('events','EventController@index');

Route::get('events/{id}','EventController@show');

Route::post('events','EventController@store');

Route::patch('events/{id}','EventController@update');

Route::delete('events/{id}','EventController@destroy');

