<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Api\MahasiswaController;

// Route utama
Route::get('/', function () {
    return view('welcome');
});

// Resource untuk posts (web)
Route::resource('posts', PostController::class);

// API routes untuk mahasiswa
Route::prefix('api')->group(function () {
    Route::apiResource('mahasiswa', MahasiswaController::class);
});
