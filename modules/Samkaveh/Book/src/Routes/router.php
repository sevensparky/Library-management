<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\Book\Http\Controllers\BookController;
use Samkaveh\Book\Http\Controllers\TrusteeshipController;

Route::group(['middleware' => 'web'], function () {

    Route::resource('books', BookController::class);

    Route::resource('trusteeship', 
        TrusteeshipController::class)->parameters([
        'trusteeship' => 'user'
    ]);
    Route::any('trusteeship/{user}/multipleDestroy', 
        [TrusteeshipController::class, 'multipleDestroy'])
        ->name('trusteeship.multipleDestroy');
});
