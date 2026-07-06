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

// ================= ADMIN =================

Route::get('/beranda', [BerandaController::class, 'index'])
    ->name('beranda');

Route::resource('kegiatan', KegiatanController::class);

// ================= RELAWAN =================

Route::get('/verifikasi-relawan', function () {
    return view('admin.relawan.index');
})->name('relawan.index');