<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Page d'accueil avec la vue welcome
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Autres pages
Route::get('/about', function () {
    return view('welcome');
})->name('about');

Route::get('/services', function () {
    return view('welcome');
})->name('services');

Route::get('/contact', function () {
    return view('welcome');
})->name('contact');
