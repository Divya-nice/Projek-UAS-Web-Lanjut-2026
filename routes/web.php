<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;

// Halaman awal
Route::get('/', function () {
    return redirect()->route('login');
});

// ================= AUTH =================

// Login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

// Register
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ================= BERANDA =================

Route::get('/beranda', [BerandaController::class, 'index'])
    ->name('beranda');

// ================= KEGIATAN =================

Route::resource('kegiatan', KegiatanController::class);

// ================= RELAWAN =================

use App\Http\Controllers\Admin\RelawanController;

Route::get('/verifikasi-relawan', [RelawanController::class, 'index'])->name('relawan.index');
Route::put('/relawan/{id}/terima', [RelawanController::class, 'terima'])->name('relawan.terima');
Route::put('/relawan/{id}/tolak', [RelawanController::class, 'tolak'])->name('relawan.tolak');

// Form pendaftaran relawan (publik)
Route::get('/daftar-relawan', [RelawanController::class, 'create'])->name('relawan.create');
Route::post('/daftar-relawan', [RelawanController::class, 'store'])->name('relawan.store');