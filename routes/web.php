<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\RelawanController;

// ================= HALAMAN AWAL =================

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

Route::get('/verifikasi-relawan', [RelawanController::class, 'index'])
    ->name('relawan.index');

Route::put('/relawan/{id}/terima', [RelawanController::class, 'terima'])
    ->name('relawan.terima');

Route::put('/relawan/{id}/tolak', [RelawanController::class, 'tolak'])
    ->name('relawan.tolak');

// ================= RELAWAN =================

Route::view('/relawan', 'relawan.index')
    ->name('relawan.beranda');

Route::view('/relawan/detail', 'relawan.show')
    ->name('relawan.detail');

Route::view('/relawan/sukses', 'relawan.sukses')
    ->name('relawan.sukses');

Route::view('/relawan/jadwal', 'relawan.jadwal')
    ->name('relawan.jadwal');