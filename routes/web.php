<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;

// Halaman awal
Route::get('/', function () {
    return view('login');
});

Route::view('/login', 'login')->name('login');

Route::view('/register', 'register')->name('register');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// ================= BERANDA =================

Route::get('/beranda', [BerandaController::class, 'index'])
    ->name('beranda');

// ================= KEGIATAN =================

Route::resource('kegiatan', KegiatanController::class);

// ================= RELAWAN =================

Route::get('/verifikasi-relawan', function () {
    return view('admin.relawan.index');
})->name('relawan.index');