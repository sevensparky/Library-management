<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\User\Http\Controllers\UserController;

Route::group(['middleware' => 'web'],function()
{   
    Route::resource('users',UserController::class);
});