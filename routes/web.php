<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// 1. Home
Route::get('/', function () {
    return view('home'); 
})->name('home');

// 2. About
Route::get('/about', function () {
    return view('about');
})->name('about');

// 3. Portfolio Frontend
Route::get('/portfolio-frontend', function () {
    return view('portfolio-frontend');
})->name('porto.fe');

// 4. Portfolio Graphic (INI YANG DIPERBAIKI)
Route::get('/portfolio-graphic', function () {
    return view('portfolio-graphic');
})->name('porto.graphic'); // <-- Sebelumnya 'portfolio-graphic', sekarang 'porto.graphic'

// 5. Contact Page
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// 6. CV Page
Route::get('/cv', function () {
    return view('cv');
})->name('cv.web');

// 7. Contact Submit Logic
Route::post('/contact', function (Request $request) {
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);
    return dd("Pesan terkirim!", $request->all());
})->name('contact.submit');