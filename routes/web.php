<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HimaController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome'); 
})->name('home');

Route::post('/daftar', [HimaController::class, 'storeRegistration'])->name('daftar.store');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::middleware(['auth'])->group(function () {
    
    Route::get('/aspirasi', function () {
        return view('aspirasi');
    })->name('aspirasi.index');
    Route::post('/aspirasi', [HimaController::class, 'storeAspiration'])->name('aspirasi.store');
});