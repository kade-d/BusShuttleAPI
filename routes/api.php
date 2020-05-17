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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::pattern("id", "[0-9]+");

Route::get('buses', 'BusController@get');
Route::get('buses/{id}', 'BusController@find');
Route::post('buses', 'BusController@create');
Route::delete('buses/{id}', 'BusController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('inspection-items', 'InspectionItemController@get');
Route::get('inspection-items/{id}', 'InspectionItemController@find');
Route::post('inspection-items', 'InspectionItemController@create');
Route::delete('inspection-items/{id}', 'InspectionItemController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('loops', 'LoopController@get');
Route::get('loops/{id}', 'LoopController@find');
Route::post('loops', 'LoopController@create');
Route::delete('loops/{id}', 'LoopController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('stops', 'StopController@get');
Route::get('stops/{id}', 'StopController@find');
Route::post('stops', 'StopController@create');
Route::delete('stops/{id}', 'StopController@delete')->middleware(["auth:api", "scopes: use, administrate"]);

Route::get('drivers', 'DriverController@get');
Route::get('drivers/{id}', 'DriverController@find');
Route::post('drivers', 'DriverController@create');
Route::delete('drivers/{id}', 'DriverController@delete')->middleware(["auth:api", "scope:administrate"]);

