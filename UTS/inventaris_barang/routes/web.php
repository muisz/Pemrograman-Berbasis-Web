<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, 'index'])->name('list');
Route::get('/add', [ItemController::class, 'add']);
Route::post('/add', [ItemController::class, 'addItem']);
Route::get('/detail/{id}', [ItemController::class, 'detail']);
Route::get('/delete/{id}', [ItemController::class, 'delete']);
Route::post('/edit/{id}', [ItemController::class, 'edit']);
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegister']);
Route::get('/logout', [AuthController::class, 'logout']);
