<?php

use Illuminate\Support\Facades\Route;

// Add this root route
Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/cv', function () {
    return view('cv');
})->name('cv');
