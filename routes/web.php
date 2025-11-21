<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Servir directement le fichier yelebara.html
Route::get('/', function () {
    return response()->file(public_path('yelebara.html'));
});

Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
