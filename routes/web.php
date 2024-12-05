<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('landing');
});