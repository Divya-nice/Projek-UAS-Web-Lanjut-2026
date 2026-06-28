<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/relawan');

Route::view('/relawan', 'relawan.index');

Route::view('/relawan/detail', 'relawan.show');
Route::view('/relawan/sukses', 'relawan.sukses');
Route::view('/relawan/jadwal', 'relawan.jadwal');