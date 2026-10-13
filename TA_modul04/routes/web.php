<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporanController;

Route::get('/laporan/form', [LaporanController::class, 'form'])
    ->name('laporan.form');

Route::post('/laporan/konfirmasi', [LaporanController::class, 'simpan'])
    ->name('laporan.konfirmasi');

Route::get('/laporan', [LaporanController::class, 'index'])
    ->name('laporan.index');
