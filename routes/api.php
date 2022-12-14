<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ShowStationController;
use App\Http\Controllers\Api\v1\ShowTransitRouteController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/station/{station}', ShowStationController::class)
    ->name('stations.show');

Route::get('/transit-route/{transitRoute}', ShowTransitRouteController::class)
    ->name('transit-route.show');