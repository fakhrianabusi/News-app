<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

// ===== Pages =====
Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');

Route::post('/contact', function (Request $request) {
    $request->validate(['name' => 'required|max:100']);
    return back()->with('success', 'Thank you ' . $request->name . ', your message was sent!');
})->name('contact.send');

// ===== News =====
Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::view('/news/add', 'news.create')->name('news.create');
Route::get('/news/store/{id}/{title}/{content}', [NewsController::class, 'store'])
    ->whereNumber('id')
    ->name('news.store');
Route::get('/news/{id}', [NewsController::class, 'show'])
    ->whereNumber('id')
    ->name('news.show');

// ===== Admin =====
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/news', [NewsController::class, 'adminIndex'])->name('news.index');
    Route::delete('/news/{id}', [NewsController::class, 'destroy'])
        ->whereNumber('id')
        ->name('news.destroy');
});
