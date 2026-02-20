<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// HANYA SATU RUTE UTAMA
Route::get('/', function () {
    return view('home'); 
})->name('home');

// Logic Contact
Route::post('/contact', function (Request $request) {
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ]);

    // TODO: Implement email sending or database storage
    // For now, return success response
    return back()->with('success', 'Thank you! Your message has been sent successfully.');
})->name('contact.submit');