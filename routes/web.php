<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PendaftaranRelawanController;



Route::get('kegiatan', [KegiatanController::class, 'index']);

Route::post('pendaftaran', [PendaftaranRelawanController::class, 'store']);

Route::view('/login', 'login')->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'Selamat datang di Dashboard';
    });

});

Route::redirect('/', '/relawan');

Route::get('/relawan', [KegiatanController::class, 'index']);

Route::view('/relawan/detail', 'relawan.show');

