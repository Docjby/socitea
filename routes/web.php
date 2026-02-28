<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('feeds', [FeedController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('feeds');

require __DIR__.'/settings.php';
