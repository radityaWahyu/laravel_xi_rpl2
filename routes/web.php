<?php

use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return "Ini halaman root";
// });

// Route::get('/halaman_dua', function () {
//     return "Ini halaman kedua";
// });

Route::get('/', [HalamanController::class, 'beranda']);
Route::get('/kontak', [HalamanController::class, 'contact']);
Route::get('/registrasi', [HalamanController::class, 'tampilForm']);
Route::post('/kirim', [HalamanController::class, 'kirimData'])->name('kirim_data');

Route::resource('/posts', PostController::class);
