<?php

use Illuminate\Support\Facades\Route;
use Samkaveh\Subject\Http\Controllers\SubjectController;

Route::group(['middleware' => 'web'], function(){

    Route::resource('subjects',SubjectController::class);
});