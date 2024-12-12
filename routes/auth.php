<?php

use Illuminate\Support\Facades\Route;

Route::domain(config('app.app_domain'))->group(function () {
    Route::get('/register')
        ->middleware('guest')
        ->name('register');

    Route::get('/login')
        ->middleware('guest')
        ->name('login');

    Route::get('/forgot-password')
        ->middleware('guest')
        ->name('password.request');
});
