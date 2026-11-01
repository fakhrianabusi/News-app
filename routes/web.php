<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{id}', [NewsController::class, 'show'])->whereNumber('id');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{id}', [NewsController::class, 'show'])->whereNumber('id')->name('news.show');
Route::view('/news/add', 'news.create')->name('news.create');
