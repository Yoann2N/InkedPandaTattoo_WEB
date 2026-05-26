<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtisteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TexteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware('throttle:120,1')->group(function () {
    Route::apiResource('artistes', ArtisteController::class);
    Route::apiResource('users', UserController::class);
    Route::apiResource('textes', TexteController::class);
});

Route::post('/login', [AuthController::class, 'login']);