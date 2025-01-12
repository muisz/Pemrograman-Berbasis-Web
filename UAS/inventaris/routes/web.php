<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

// landing
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('reset-password');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Profile
Route::get('/profile', [DashboardController::class, 'profile'])->name('profile');

// items
Route::get('/items', [ItemController::class, 'index'])->name('items');
Route::get('/items/add', [ItemController::class, 'add'])->name('add-item');
Route::get('/items/{id}', [ItemController::class, 'detail'])->name('detail-item');

// Transactions
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions');
Route::get('/transactions/{id}', [TransactionController::class, 'detail'])->name('detail-transaction');
Route::get('/transactions/add/in', [TransactionController::class, 'add_in'])->name('add-in-transaction');
Route::get('/transactions/add/out', [TransactionController::class, 'add_out'])->name('add-out-transaction');
Route::get('/transactions/{id}/edit/in', [TransactionController::class, 'edit_in'])->name('edit-in-transaction');
Route::get('/transactions/{id}/edit/out', [TransactionController::class, 'edit_out'])->name('edit-out-transaction');

// Suppliers
Route::get('/suppliers', [SupplierController::class, 'index'])->name('suppliers');
Route::get('/suppliers/add', [SupplierController::class, 'add'])->name('add-supplier');
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])->name('edit-supplier');
Route::get('/suppliers/{id}/delete', [SupplierController::class, 'delete'])->name('delete-supplier');

// Users
Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('add-user');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('edit-user');
Route::get('/users/{id}/delete', [UserController::class, 'delete'])->name('delete-user');