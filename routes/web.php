<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/articles/{slug}', [ArticleController::class, 'show'])->name('articles.show');
Route::view('/about', 'about')->name('about');
