<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;

// Welcome Route
Route::get('/', function () {
    return view('welcome');
});

// Registration Routes
Route::post('/register', [RegisteredUserController::class, 'store']);

// Login Routes
Route::post('/login', [LoginController::class, 'login']);

// Dashboard/Home Route (Authenticated User)
Route::middleware('auth')->get('/home', [HomeController::class, 'index'])->name('home');

// Logout Route (Optional)
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Example of a Welcome Page Route
Route::get('/welcome', function () {
    return view('welcome');
});
