<?php

use App\Http\Controllers\v1\AuthController;
use App\Http\Controllers\v1\CustomerController;
use App\Http\Controllers\v1\ExpenseController;
use App\Http\Controllers\v1\ProductController;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->prefix('auth')->name('auth.')->group(function () {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');
    Route::post('me', [AuthController::class, 'me'])->name('me');

});

Route::middleware('auth:api')->group(function () {
    Route::apiResource('products', ProductController::class);
    Route::apiResource('customers', CustomerController::class);
    Route::apiResource('expenses', ExpenseController::class);
});
