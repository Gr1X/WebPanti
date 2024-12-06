<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

// Dashboard (hanya dapat diakses jika login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// Login routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Register routes
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

// Landing page
Route::get('/', function () {
    return view('landing');
})->name('landing');

// Other static pages
Route::get('/donation', function () {
    return view('donation');
})->name('donation');

Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

Route::get('/program', function(){
    return view('program');
})->name('program');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');
