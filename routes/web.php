<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\UserProgramController;
use App\Http\Controllers\DonasiController;
use Illuminate\Support\Facades\Route;

// Landing Page and Static Pages (Pastikan route ini pertama)
Route::view('/', 'user.landing')->name('landing');  // Halaman utama
// Route::view('/donation', 'user.donation')->name('donation');
Route::view('/gallery', '/user.gallery')->name('gallery');
Route::view('/program', '/user.program')->name('program');
Route::view('/profile', '/auth.profile')->name('profile');
Route::view('/aboutus', 'user.aboutUs')->name('aboutus');


Route::view('/donation/details', 'user.donateComponent.detailsDonation')->name('donateDetails');
// Admin Routes
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::resource('programs', AdminProgramController::class);
});

// web.php
Route::get('/donation', [UserProgramController::class, 'showDonations'])->name('donation');
Route::get('/donation/{id}', [UserProgramController::class, 'showDonationDetails'])->name('donateDetails');

Route::get('/donation/{id}/payment', [DonasiController::class, 'showPaymentForm'])->name('donation.payment');
Route::post('/donation/{id}/payment', [DonasiController::class, 'submitDonation'])->name('donation.submit');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('user.landing');
    })->name('landing');
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
    Route::view('/forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail']);

    // Reset Password
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'passwordReset'])->name('password.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/donation/{id}/payment', [DonasiController::class, 'showPaymentForm'])->name('donation.payment');
    Route::post('/donation/{id}/payment', [DonasiController::class, 'submitDonation'])->name('donation.submit');
});

