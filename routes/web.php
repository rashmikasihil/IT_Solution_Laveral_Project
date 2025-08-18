<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;

// Homepage
Route::get('/', function () {
    return view('home'); // home.blade.php
})->name('home');

// Add customer page
Route::resource('customers', CustomerController::class);
Route::get('/services/more', [ServiceController::class, 'more'])->name('services.more');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/chatbot', [ChatbotController::class, 'ask']);


