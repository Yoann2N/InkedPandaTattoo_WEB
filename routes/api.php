<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArtisteController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\UserController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::apiResource('artistes', ArtisteController::class);
Route::apiResource('users', UserController::class);

Route::post('/login', [AuthController::class, 'login']);
