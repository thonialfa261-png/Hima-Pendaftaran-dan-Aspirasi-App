<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HimaController;

Route::get('/', function () { return view('welcome'); });
Route::get('/aspirasi', function () { return view('aspirasi'); });
Route::post('/daftar', [HimaController::class, 'storeRegistration'])->name('daftar.store');
Route::post('/aspirasi', [HimaController::class, 'storeAspiration'])->name('aspirasi.store');
