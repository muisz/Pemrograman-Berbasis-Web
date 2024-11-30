<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\InventarisController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/inventaris', [ItemController::class, 'index'])->name('list');
Route::get('/inventaris/add', [ItemController::class, 'add']);
Route::post('/inventaris/add', [ItemController::class, 'addItem']);
Route::get('/inventaris/detail/{id}', [ItemController::class, 'detail']);
Route::get('/inventaris/delete/{id}', [ItemController::class, 'delete']);
Route::post('/inventaris/edit/{id}', [ItemController::class, 'edit']);

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/users/add', [UserController::class, 'add'])->name('add-user');
Route::post('/users/add', [UserController::class, 'addUser']);
Route::get('/users/detail/{id}', [UserController::class, 'detail'])->name('detail-user');
Route::get('/users/delete/{id}', [UserController::class, 'delete']);
Route::post('/users/edit/{id}', [UserController::class, 'edit']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegister']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route::get('/inventaris', [InventarisController::class, 'index'])->name('inventaris');