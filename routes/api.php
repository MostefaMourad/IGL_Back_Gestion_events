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

Route::group(['prefix' => 'events'], function() {
    Route::get('/', 'EventController@index')->name('events');
    Route::get('/{id}', 'EventController@show')->name('events.show');
    Route::post('/', 'EventController@store')->name('events.store');
    Route::patch('/{id}', 'EventController@update')->name('events.update');
    Route::delete('/{id}', 'EventController@destroy')->name('events.delete');
});