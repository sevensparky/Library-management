<?php

use App\Http\Controllers\HomeController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use Samkaveh\Book\Models\Book;

Route::get('/test', function () {
    // return view('home');
    $book = Book::find(30);
    $subjects = \Samkaveh\Subject\Models\Subject::all();
    // $result = $subjects->whereIn('id' ,[$book->id])->get();
    // foreach ($sub as $value) {
        // echo $value->id;

        // dd($s->whereIn('id' ,[$value->id])->get());
    // }
    // dd($subjects->whereIn('id' ,[$book->id]));

    foreach ($book->subjects as $val) {
        // echo $val->id;        
    }

    print($val->id);


});
// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('tests', HomeController::class);

