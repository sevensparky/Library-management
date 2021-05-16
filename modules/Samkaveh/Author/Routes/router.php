<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\Author\Http\Controllers\AuthorController;


Route::group(['middleware' => 'web'],function()
{   
    Route::resource('authors',AuthorController::class);
});