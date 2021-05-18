<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\Book\Http\Controllers\BookController;

Route::group(['middleware' => 'web'], function(){

Route::resource('books', BookController::class);

});