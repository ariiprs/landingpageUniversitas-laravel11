<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;


Route::get('/', [FrontController::class, 'showArticlesByCategory'])->name('front.index');

Route::get('/categories', function () {
    return view('front.categories');
})->name('front.categories');

Route::get('/details', function () {
    return view('front.details');
})->name('front.details');

Route::get('/search', function () {
    return view('front.search');
})->name('front.search');
