<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\Dashboard\Http\Controllers\DashboardController;

Route::group(['middleware' => 'web'],function()
{   
    Route::get('dashboard',DashboardController::class)->name('dashboard');
});