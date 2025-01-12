<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;

// landing
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('reset-password');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// items
Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/add', [ItemController::class, 'add'])->name('add-item');
Route::get('/items/{id}', [ItemController::class, 'detail'])->name('detail-item');