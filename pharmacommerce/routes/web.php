<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [AuthController::class, 'login']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('login_post', [AuthController::class, 'login_post']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('logout', [AuthController::class, 'logout']);