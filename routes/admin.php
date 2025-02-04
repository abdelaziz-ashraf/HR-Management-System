<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::prefix('auth')
        ->middleware('guest:admin')
        ->controller(AuthController::class)->group(function () {
        Route::get('/login', 'login_view')->name('login.view');
        Route::post('/login', 'login_action')->name('login.action');
    });

    Route::middleware('auth:admin')->group(function () {
        Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
        Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    });
});
