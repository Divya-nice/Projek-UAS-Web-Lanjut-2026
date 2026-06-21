<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BerandaController;
use App\Http\Controllers\Admin\KegiatanController;

Route::get('/', function () {
    return view('register');
})->name('register');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/beranda', [BerandaController::class, 'index'])
    ->name('beranda');

Route::get('/kegiatan', [KegiatanController::class, 'index'])
    ->name('kegiatan.index');

Route::post('/kegiatan/store', [KegiatanController::class, 'store'])
    ->name('kegiatan.store');

Route::get('/verifikasi-relawan', function () {
    return view('admin.relawan.index');
})->name('relawan.index');