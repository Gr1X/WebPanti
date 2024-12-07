<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AdminProgramController;
use Illuminate\Support\Facades\Route;

// Landing Page and Static Pages (Pastikan route ini pertama)
Route::view('/', '/user.landing')->name('landing');  // Halaman utama
Route::view('/donation', '/user.donation')->name('donation');
Route::view('/gallery', '/user.gallery')->name('gallery');
Route::view('/program', '/user.program')->name('program');
Route::view('/profile', '/user.profile')->name('profile');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('programs', AdminProgramController::class);
});

// Dashboard (Hanya dapat diakses jika login)
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});

// Guest routes (Login, Register, Forgot/Reset Password)
Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');

    // Register
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.submit');

    // Forgot Password
    Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset Password
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::get('/forgot-password', function () {
    return view('auth.forgot-password');
})->name('password.request');