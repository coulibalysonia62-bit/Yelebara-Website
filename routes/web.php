<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// Page d'accueil
Route::get('/', [HomeController::class, 'index'])->name('home');

// À propos
Route::get('/about', [HomeController::class, 'about'])->name('about');

// Services
Route::get('/services', [HomeController::class, 'services'])->name('services');

// Contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');