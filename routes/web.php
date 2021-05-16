<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('home');
    return 'home';
});

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('tests', HomeController::class);