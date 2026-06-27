<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JadwalRelawanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

Route::get('/jadwal-saya', 
[JadwalRelawanController::class,'index']);

Route::view('/login', 'login')->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', function () {
        return 'Selamat datang di Dashboard';
    });

});