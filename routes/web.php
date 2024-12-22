<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontController::class, 'index'])->name('front.index');
Route::get('/details/{article:slug}', [FrontController::class, 'detailsNews'])->name('front.details_news');
Route::get('/all-news', [FrontController::class, 'allNews'])->name('front.all_news');

Route::get('/facilities', [FrontController::class, 'facility'])->name('front.facilities');

Route::get('/histories', [FrontController::class, 'history'])->name('front.histories');

Route::get('/register', [FrontController::class, 'register'])->name('front.register');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::get('/categories', function () {
    return view('front.categories');
})->name('front.categories');



Route::get('/search', function () {
    return view('front.search');
})->name('front.search');
