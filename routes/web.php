<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('login.index');
});

// Authentication login page
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);

// logout
Route::post('/logout', [LoginController::class,'logout']);

// Register page
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);

// Dashboard page
Route::get('/dashboard', [DashboardController::class,'index'])->middleware('auth');

// Mahasiswa page
Route::get('/mahasiswa', [MahasiswaController::class,'index'])->middleware('auth');
Route::get('/mahasiswa/add', [MahasiswaController::class,'create'])->middleware('auth');
Route::post('/mahasiswa', [MahasiswaController::class,'store'])->middleware('auth');

