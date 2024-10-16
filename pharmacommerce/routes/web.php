<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\MedicinesController;

Route::get('/', [AuthController::class, 'login']);

Route::get('forgot', [AuthController::class, 'forgot']);

Route::post('login_post', [AuthController::class, 'login_post']);

Route::post('forgot_post', [AuthController::class, 'forgot_post']);

Route::group(['middleware' => 'admin'], function() {
    // dashboard
    Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);

    // customers
    Route::get('admin/customers', [CustomersController::class, 'customers']);

    Route::get('admin/customers/add', [CustomersController::class, 'add_customers']);

    Route::post('admin/customers/add', [CustomersController::class, 'insert_add_customers']);

    Route::get('admin/customers/edit/{id}', [CustomersController::class, 'edit_customers']);

    Route::post('admin/customers/edit/{id}', [CustomersController::class, 'update_customers']);

    Route::get('admin/customers/delete/{id}', [CustomersController::class, 'delete_customers']);

    // medicines

    Route::get('admin/medicines', [MedicinesController::class, 'medicines']);

    Route::get('admin/medicines/add', [MedicinesController::class, 'add_medicines']);

    Route::post('admin/medicines/add', [MedicinesController::class, 'insert_add_medicines']);

    Route::get('admin/medicines/edit/{id}', [MedicinesController::class, 'edit_medicines']);

    Route::post('admin/medicines/edit/{id}', [MedicinesController::class, 'update_medicines']);

    Route::get('admin/medicines/delete/{id}', [MedicinesController::class, 'delete_medicines']);

});

Route::get('logout', [AuthController::class, 'logout']);