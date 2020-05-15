<?php

use Illuminate\Support\Facades\Route;

$name = Route::currentRouteName();

Route::pattern('id', '[0-9]+');

Route::get('buses', 'BusController@get');
Route::get('buses/{id}', 'BusController@find');
Route::post('buses', 'BusController@create');
Route::delete('buses/{id}', 'BusController@delete');

Route::get('inspection-items', 'InspectionItemController@get');
Route::get('inspection-items/{id}', 'InspectionItemController@find');
Route::post('inspection-items', 'InspectionItemController@create');
Route::delete('inspection-items/{id}', 'InspectionItemController@delete');

Route::get('loops', 'LoopController@get');
Route::get('loops/{id}', 'LoopController@find');
Route::post('loops', 'LoopController@create');
Route::delete('loops/{id}', 'LoopController@delete');

Route::get('stops', 'StopController@get');
Route::get('stops/{id}', 'StopController@find');
Route::post('stops', 'StopController@create');
Route::delete('stops/{id}', 'StopController@delete');

Route::get('drivers', 'UserController@get');
Route::get('drivers/{id}', 'UserController@find');
Route::post('drivers', 'UserController@create');
Route::delete('drivers/{id}', 'UserController@delete');


