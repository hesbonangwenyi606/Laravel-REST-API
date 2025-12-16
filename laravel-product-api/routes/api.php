<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;

// Public route: login
Route::post('/login', [AuthController::class, 'login']);

// Protected routes: require authentication via Sanctum
Route::middleware('auth:sanctum')->group(function () {
    // CRUD for products
    Route::apiResource('products', ProductController::class);

    // Logout route
    Route::post('/logout', [AuthController::class, 'logout']);
});
