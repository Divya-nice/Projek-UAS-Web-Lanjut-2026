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
