<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\RelawanController;
use App\Http\Controllers\PendaftaranRelawanController;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return redirect()->route('login');
});


// =========================
// AUTH
// =========================

Route::get('/login', [AuthController::class,'showLogin'])->name('login');
Route::post('/login', [AuthController::class,'login'])->name('login.process');

Route::get('/register', [AuthController::class,'showRegister'])->name('register');
Route::post('/register', [AuthController::class,'register'])->name('register.process');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');

// =========================
// PROFIL (Admin & Relawan)
// =========================

Route::middleware('auth')->group(function () {

    Route::get('/profil', [ProfilController::class,'index'])
        ->name('profil.index');

    Route::put('/profil', [ProfilController::class,'update'])
        ->name('profil.update');

});


// =========================
// ADMIN
// =========================

Route::middleware('role:admin')->group(function () {
    Route::get('/beranda',[BerandaController::class,'index'])
        ->name('admin.beranda');

    Route::resource('kegiatan',KegiatanController::class);

    Route::get('/verifikasi-relawan',[RelawanController::class,'index'])
        ->name('relawan.index');

    Route::put('/relawan/{id}/terima',[RelawanController::class,'terima'])
        ->name('relawan.terima');

    Route::put('/relawan/{id}/tolak',[RelawanController::class,'tolak'])
        ->name('relawan.tolak');
});

// =========================
// RELAWAN
// =========================

Route::middleware('role:relawan')->group(function () {
    
    Route::get('/relawan', [KegiatanController::class, 'relawan'])
        ->name('relawan.beranda');

    Route::get('/relawan/detail/{id}', [KegiatanController::class,'show'])
        ->name('relawan.show');

    Route::post('/pendaftaran', [PendaftaranRelawanController::class,'store'])
        ->name('pendaftaran.store');

    Route::view('/relawan/sukses', 'relawan.sukses')
        ->name('relawan.sukses');

    Route::get('/relawan/jadwal', [KegiatanController::class, 'jadwal'])
        ->name('relawan.jadwal');

});