<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightCountryController;
use App\Http\Controllers\FlightCityController;
use App\Http\Controllers\FlightAirlineController;
use App\Http\Controllers\FlightAirportController;
use App\Http\Controllers\FlightPlaneController;
use App\Http\Controllers\FlightRouteController;
use App\Http\Controllers\FlightAllianceController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('country', FlightCountryController::class);
Route::resource('city', FlightCityController::class);
Route::resource('airline', FlightAirlineController::class);
Route::resource('airport', FlightAirportController::class);
Route::resource('plane', FlightPlaneController::class);
Route::resource('route', FlightRouteController::class);
Route::resource('alliance', FlightAllianceController::class);