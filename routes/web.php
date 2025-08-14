<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Homepage
Route::get('/', function () {
    return view('home'); // home.blade.php
})->name('home');

// Add customer page
Route::resource('customers', CustomerController::class);
Route::get('/services/more', [ServiceController::class, 'more'])->name('services.more');

