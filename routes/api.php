<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::pattern("id", "[0-9]+");

Route::get('buses', 'BusController@get');
Route::get('buses/{id}', 'BusController@find');
Route::post('buses', 'BusController@create')->middleware(["auth:api", "scopes: use, administrate"]);
Route::delete('buses/{id}', 'BusController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('drivers', 'DriverController@get');
Route::get('drivers/{id}', 'DriverController@find');
Route::post('drivers', 'DriverController@create')->middleware(["auth:api", "scopes: use, administrate"]);
Route::delete('drivers/{id}', 'DriverController@delete')->middleware(["auth:api", "scope:administrate"]);

Route::get('entries', 'EntryController@get')->middleware(["auth:api", "scope:administrate"]);
Route::get('entries/{id}', 'EntryController@find')->middleware(["auth:api", "scope:administrate"]);
Route::post('entries', 'EntryController@create');
Route::delete('entries/{id}', 'EntryController@delete')->middleware(["auth:api", "scope:administrate"]);

Route::get('inspections', 'InspectionController@get')->middleware(["auth:api", "scope:administrate"]);
Route::get('inspections/{id}', 'InspectionController@find')->middleware(["auth:api", "scope:administrate"]);
Route::post('inspections', 'InspectionController@create');
Route::delete('inspections/{id}', 'InspectionController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('inspection-items', 'InspectionItemController@get');
Route::get('inspection-items/{id}', 'InspectionItemController@find');
Route::post('inspection-items', 'InspectionItemController@create')->middleware(["auth:api", "scopes: use, administrate"]);
Route::delete('inspection-items/{id}', 'InspectionItemController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('loops', 'LoopController@get');
Route::get('loops/{id}', 'LoopController@find');
Route::post('loops', 'LoopController@create')->middleware(["auth:api", "scopes: use, administrate"]);
Route::delete('loops/{id}', 'LoopController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('stops', 'StopController@get');
Route::get('stops/{id}', 'StopController@find');
Route::get('loops/{id}/stops', 'StopController@getByLoop');
Route::post('loops/{id}/stops', 'StopController@createByLoop')->middleware(["auth:api", "scopes: use, administrate"]);
Route::delete('stops/{id}', 'StopController@delete')->middleware(["auth:api", "scopes: use, administrate"]);



