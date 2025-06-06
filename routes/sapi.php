<?php

use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::get('t', function () {
    dd('hi');
});

// Protected routes
//Route::middleware('auth:api')->group(function () {
//    Route::get('me', [AuthController::class, 'me']);
//    Route::post('logout', [AuthController::class, 'logout']);
//    Route::post('refresh', [AuthController::class, 'refresh']);
//});
