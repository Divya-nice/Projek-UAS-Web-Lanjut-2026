<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Rute untuk halaman utama
Route::get('/', [AdminController::class, 'index']);

// Rute untuk halaman admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/aksi/create', [AdminController::class, 'create'])->name('aksi.create');

Route::get('/admin/aksi', [AdminController::class, 'indexAksi'])->name('aksi.index');