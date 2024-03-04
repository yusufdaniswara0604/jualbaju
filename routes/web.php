<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\ListBarangController;

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/list-item', [ListItemController::class, 'index']);
Route::get('/list-barang', [ListBarangController::class, 'tampilkan']); // Mengubah 'index' menjadi 'tampilkan'
