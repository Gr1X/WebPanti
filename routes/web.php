<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\AdminProgramController;
use App\Http\Controllers\UserProgramController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EditPasswordController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EditGalleryController;
use App\Http\Controllers\UserGalleryController;
use App\Http\Controllers\VolunteerController;
use Illuminate\Support\Facades\Route;

// Landing Page and Static Pages (Pastikan route ini pertama)
Route::view('/', 'user.landing')->name('landing');  // Halaman utama
// Route::view('/donation', 'user.donation')->name('donation');
// Route::view('/gallery', '/user.gallery')->name('gallery');
Route::get('/gallery', [UserGalleryController::class, 'index'])->name('gallery');
Route::view('/program', '/user.program')->name('program');
// Route::view('/profile', '/auth.profile')->name('profile');
Route::view('/aboutus', 'user.aboutUs')->name('aboutus');


Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
});

Route::get('/gallery/{year?}', [GalleryController::class, 'index'])->name('gallery.index');

Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/edit', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/program/volunteer/daftar', function(){
    return view('user.programComponent.registerRelawan');
})->name('daftarRelawan'); 

Route::get('/program/details', function(){
    return view('user.programComponent.detailBerita');
})->name('programDetails'); 

Route::get('/program/volunteer', function(){
    return view('user.programComponent.daftarRelawan');
})->name('relawan');

Route::view('/donation/details', 'user.donateComponent.daftarRelawan')->name('donateDetails');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
  // Halaman utama program (index)
  Route::get('programs', [AdminProgramController::class, 'index'])->name('admin.programs.index');

  // Halaman untuk membuat program baru (create)
  Route::get('/programs/create', [AdminProgramController::class, 'create'])->name('admin.programs.create');
  Route::post('/programs', [AdminProgramController::class, 'store'])->name('admin.programs.store');

  // Halaman untuk mengedit program (edit)
  Route::get('/programs/{id}/edit', [AdminProgramController::class, 'edit'])->name('admin.programs.edit');
  Route::post('/programs/{id}', [AdminProgramController::class, 'update'])->name('admin.programs.update');

  // Hapus program
  Route::delete('/programs/{id}', [AdminProgramController::class, 'destroy'])->name('admin.programs.destroy');

  // Edit gallery
  Route::get('/gallery', [EditGalleryController::class, 'index'])->name('admin.gallery.index');
  Route::get('/gallery/create', [EditGalleryController::class, 'create'])->name('admin.gallery.create');
  Route::post('/gallery', [EditGalleryController::class, 'store'])->name('admin.gallery.store');
  Route::get('/gallery/{id}/edit', [EditGalleryController::class, 'edit'])->name('admin.gallery.edit');
  Route::put('/gallery/{id}', [EditGalleryController::class, 'update'])->name('admin.gallery.update');
  Route::delete('/gallery/{id}', [EditGalleryController::class, 'destroy'])->name('admin.gallery.destroy');
});

Route::get('password/edit', [EditPasswordController::class, 'edit'])->name('password.edit');
Route::post('password/update', [EditPasswordController::class, 'update'])->name('password.update');

// Route untuk pendaftaran volunteer
Route::get('/program/volunteer/daftar/{bidang}', [VolunteerController::class, 'showRegisterForm'])->name('program.volunteer.registerForm');
Route::post('/program/volunteer/daftar/{bidang}', [VolunteerController::class, 'register'])->name('program.volunteer.register');

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

    // Profile
    Route::resource('programs', AdminProgramController::class);

    // Donation
    Route::get('/donation/{id}/payment', [DonasiController::class, 'showPaymentForm'])->name('donation.payment');
    Route::post('/donation/{id}/payment', [DonasiController::class, 'submitDonation'])->name('donation.submit');
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

