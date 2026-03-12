<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Page d'accueil - garde la vue welcome intacte
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Pages séparées pour la navigation
Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Pages supplémentaires
Route::get('/partenariat', function () {
    return view('partenariat');
})->name('partenariat');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');
