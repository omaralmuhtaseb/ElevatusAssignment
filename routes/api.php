<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HealthCheckController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidateController;

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
//------------ Health Check Route ------------------
Route::get('health', HealthCheckController::class);

//------------ Auth Routes ------------------
Route::post('login', [AuthController::class,'login']);
Route::post('logout', [AuthController::class,'logout']);

Route::group(['middleware' => 'auth:api'], function () {

    Route::apiResource('user',UserController::class);
    Route::apiResource('candidate',CandidateController::class);


});




