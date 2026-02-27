<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('feeds', 'feeds')
    ->middleware(['auth', 'verified'])
    ->name('feeds');

require __DIR__.'/settings.php';
