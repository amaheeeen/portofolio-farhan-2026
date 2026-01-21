<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// HANYA SATU RUTE UTAMA
Route::get('/', function () {
    return view('home'); 
})->name('home');

// Logic Contact
Route::post('/contact', function (Request $request) {
    return dd("Pesan terkirim!", $request->all());
})->name('contact.submit');