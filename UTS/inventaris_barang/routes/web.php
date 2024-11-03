<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inventaris');
});

Route::get('/add', function () {
    return view('add-item');
});