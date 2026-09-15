<?php

use App\Http\Controllers\HalamanController;
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

Route::get('/', [HalamanController::class, 'halamanUtama']);
