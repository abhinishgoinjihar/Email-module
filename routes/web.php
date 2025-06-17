<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DashboardController;

Route::group(['middleware' => 'web'], function () {
    Route::get('/', fn() => redirect()->route('login'));
    Auth::routes();
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('home')->middleware('auth');
});