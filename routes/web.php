<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Pastikan baris ini ada untuk menangani form

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Halaman Home
Route::get('/', function () {
    return view('home');
});

// Halaman About
Route::get('/about', function () {
    return view('about');
});

// Halaman Portfolio Frontend
Route::get('/portfolio-frontend', function () {
    return view('portfolio-frontend');
});

// Halaman Portfolio Graphic
Route::get('/portfolio-graphic', function () {
    return view('portfolio-graphic');
});

// Halaman Contact (Menampilkan Form)
Route::get('/contact', function () {
    return view('contact');
});

// Halaman Contact (Menerima Kiriman Form - POST)
Route::post('/contact', function (Request $request) {
    // 1. Validasi input sederhana
    $request->validate([
        'name' => 'required',
    ]);

    // 2. Tampilkan data yang dikirim (untuk tes)
    return dd($request->all());
});