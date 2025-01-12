<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use App\Http\Middleware\AuthMiddleware;
use App\Utils\Role;

// landing
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'post_login']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'post_register']);

Route::get('/forgot-password', [AuthController::class, 'forgot_password'])->name('forgot-password');
Route::post('/forgot-password', [AuthController::class, 'post_forgot_password']);

Route::get('/reset-password', [AuthController::class, 'reset_password'])->name('reset-password');
Route::post('/reset-password', [AuthController::class, 'post_reset_password']);

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('dashboard');

// Profile
Route::get('/profile', [DashboardController::class, 'profile'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('profile');
Route::post('/profile', [DashboardController::class, 'post_profile'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG);

// items
Route::get('/items', [ItemController::class, 'index'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('items');
Route::get('/items/add', [ItemController::class, 'add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('add-item');
Route::post('/items/add', [ItemController::class, 'post_add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG);
Route::get('/items/{id}', [ItemController::class, 'detail'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('detail-item');
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('edit-item');
Route::post('/items/{id}/edit', [ItemController::class, 'post_edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG);

// Transactions
Route::get('/transactions', [TransactionController::class, 'index'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('transactions');
Route::get('/transactions/{id}', [TransactionController::class, 'detail'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('detail-transaction');
Route::get('/transactions/add/in', [TransactionController::class, 'add_in'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('add-in-transaction');
Route::post('/transactions/add/in', [TransactionController::class, 'post_add_in'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG);
Route::get('/transactions/add/out', [TransactionController::class, 'add_out'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('add-out-transaction');
Route::get('/transactions/{id}/edit/in', [TransactionController::class, 'edit_in'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('edit-in-transaction');
Route::post('/transactions/{id}/edit/in', [TransactionController::class, 'post_edit_in'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG);
Route::get('/transactions/{id}/edit/out', [TransactionController::class, 'edit_out'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN.':'.Role::$ADMIN_GUDANG)
    ->name('edit-out-transaction');

// Suppliers
Route::get('/suppliers', [SupplierController::class, 'index'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('suppliers');
Route::get('/suppliers/add', [SupplierController::class, 'add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('add-supplier');
Route::post('/suppliers/add', [SupplierController::class, 'post_add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN);
Route::get('/suppliers/{id}/edit', [SupplierController::class, 'edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('edit-supplier');
Route::post('/suppliers/{id}/edit', [SupplierController::class, 'post_edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN);
Route::get('/suppliers/{id}/delete', [SupplierController::class, 'delete'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('delete-supplier');

// Users
Route::get('/users', [UserController::class, 'index'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('users');
Route::get('/users/add', [UserController::class, 'add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('add-user');
Route::post('/users/add', [UserController::class, 'post_add'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN);
Route::get('/users/{id}/edit', [UserController::class, 'edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('edit-user');
Route::post('/users/{id}/edit', [UserController::class, 'post_edit'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN);
Route::get('/users/{id}/delete', [UserController::class, 'delete'])
    ->middleware(AuthMiddleware::class.':'.Role::$SUPER_ADMIN)
    ->name('delete-user');