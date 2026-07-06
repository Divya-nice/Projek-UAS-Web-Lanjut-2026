<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;

// ================= HALAMAN AWAL =================

Route::get('/', function () {
    return view('login');
});

// ================= AUTH =================

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.process');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.process');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ================= ADMIN =================

Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');

Route::resource('kegiatan', KegiatanController::class);

Route::get('/verifikasi-relawan', function () {
    return view('admin.relawan.index');
})->name('relawan.index');

// ================= RELAWAN =================

Route::view('/relawan', 'relawan.index');

Route::view('/relawan/detail', 'relawan.show');

Route::view('/relawan/sukses', 'relawan.sukses');