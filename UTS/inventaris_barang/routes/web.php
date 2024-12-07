<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\BarangController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/inventaris', [ItemController::class, 'index'])->name('list');
Route::get('/inventaris/add', [ItemController::class, 'add']);
Route::post('/inventaris/add', [ItemController::class, 'addItem']);
Route::get('/inventaris/detail/{id}', [ItemController::class, 'detail']);
Route::get('/inventaris/delete/{id}', [ItemController::class, 'delete']);
Route::post('/inventaris/edit/{id}', [ItemController::class, 'edit']);

Route::get('/user', [UserController::class, 'index'])->name('users');
Route::get('/user/add', [UserController::class, 'add'])->name('add-user');
Route::post('/user/add', [UserController::class, 'addUser']);
Route::get('/user/detail/{id}', [UserController::class, 'detail'])->name('detail-user');
Route::get('/user/delete/{id}', [UserController::class, 'delete']);
Route::post('/user/edit/{id}', [UserController::class, 'edit']);
Route::get('/user/myprofile', [UserController::class, 'myProfile'])->name('my-profile');
Route::post('/user/myprofile/edit', [UserController::class, 'editMyProfile']);

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin']);
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'submitRegister']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/supplier', [SupplierController::class, 'index'])->name('supplier');
Route::get('/supplier/add', [SupplierController::class, 'add']);
Route::post('/supplier/add', [SupplierController::class, 'addSupplier']);
Route::get('/supplier/detail/{id}', [SupplierController::class, 'detail'])->name('detail-supplier');
Route::post('/supplier/edit/{id}', [SupplierController::class, 'editSupplier']);
Route::get('/supplier/delete/{id}', [SupplierController::class, 'hapusSupplier']);

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::post('/kategori/add', [KategoriController::class, 'addKategori']);
Route::post('/kategori/edit/{id}', [KategoriController::class, 'editKategori']);
Route::get('/kategori/detail/{id}', [KategoriController::class, 'detail'])->name('detail-kategori');
Route::get('/kategori/delete/{id}', [KategoriController::class, 'hapusKategori']);

Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/barang/add', [BarangController::class, 'add']);
Route::post('/barang/add', [BarangController::class, 'addBarang']);
Route::get('/barang/detail/{id}', [BarangController::class, 'detail'])->name('detail-barang');
Route::post('/barang/edit/{id}', [BarangController::class, 'editBarang']);
Route::get('/barang/delete/{id}', [BarangController::class, 'hapusBarang']);

// Route::get('/inventaris', [InventarisController::class, 'index'])->name('inventaris');