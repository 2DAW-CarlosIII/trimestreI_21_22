<?php

use App\Http\Controllers\API\PropietarioController;
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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('propietarios', PropietarioController::class);
//middleware('auth:sanctum')->

Route::middleware('auth:sanctum')->apiResource('propietarios/{propietarioId}', PropietarioController::class);


Route::post('propietarios', [PropietarioController::class, 'aulavirtual']);
