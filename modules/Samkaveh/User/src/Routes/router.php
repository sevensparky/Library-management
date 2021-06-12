<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use Samkaveh\User\Http\Controllers\UserController;

Route::group(['middleware' => 'web'],function()
{   
    Route::resource('users',UserController::class);
    Route::get('login', [LoginController::class,'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class,'login']);
    Route::post('logout', [LoginController::class,'logout'])->name('logout');
});

