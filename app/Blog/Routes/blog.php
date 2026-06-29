<?php

use App\Blog\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/blog', [PostController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [PostController::class, 'category'])->name('blog.category');
Route::get('/blog/{slug}', [PostController::class, 'show'])->name('blog.show');
