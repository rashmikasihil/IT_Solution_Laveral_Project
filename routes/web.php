<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ChatbotController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Homepage
Route::get('/', function () {
    return view('home'); // home.blade.php
})->name('home');

// Add customer page
Route::resource('customers', CustomerController::class);
Route::get('/services/more', [ServiceController::class, 'more'])->name('services.more');
Route::get('/services/detils', [DetailsController::class, 'detil'])->name('services.detils');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::post('/chatbot', [ChatbotController::class, 'ask']);
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');


