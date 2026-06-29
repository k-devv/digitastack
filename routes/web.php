<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::post('/contact', [PagesController::class, 'contactSubmit'])->name('contact.submit');
Route::get('/search', [PagesController::class, 'search'])->name('search');
Route::get('/privacy-policy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/cookie-policy', [PagesController::class, 'cookie'])->name('cookie');
Route::get('/terms-of-service', [PagesController::class, 'terms'])->name('terms');
Route::get('/disclaimer', [PagesController::class, 'disclaimer'])->name('disclaimer');
