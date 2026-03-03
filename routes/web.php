<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/feeds', [FeedController::class, 'index'])->name('feeds');
    Route::get('/announcements', function () {
        return view('announcements');
    })->name('announcements');
    Route::get('/rules', function () {
        return view('rules');
    })->name('rules');
    Route::get('/privacy', function () {
        return view('privacy');
    })->name('privacy');
});

require __DIR__.'/settings.php';
