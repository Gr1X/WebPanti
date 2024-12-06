<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/', function () {
    return view('landing ');
});

Route::get('donation', function () {
    return view('donation');
});

Route::get('/gallery', function(){
    return view('gallery');
});

Route::get('/program', function(){
    return view('program');
});