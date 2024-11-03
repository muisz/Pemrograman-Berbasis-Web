<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [ItemController::class, 'index'])->name('list');
Route::get('/add', [ItemController::class, 'add']);
Route::post('/add', [ItemController::class, 'addItem']);
Route::get('/detail/{id}', [ItemController::class, 'detail']);
Route::get('/delete/{id}', [ItemController::class, 'delete']);
Route::post('/edit/{id}', [ItemController::class, 'edit']);