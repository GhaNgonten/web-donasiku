<?php

use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DonasiController::class, 'index'])->name('home');

Route::get('/donasi/baru', [DonasiController::class, 'create'])->name('donasi.create');

Route::post('/donasi/simpan', [DonasiController::class, 'store'])->name('donasi.store');

Route::get('/donasi/riwayat', [DonasiController::class, 'daftarDonasi'])->name('donasi.history'); 