<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', function () {


    $post = Post::find(2);
        //  $inc = $post->decrement('count',2);
        // $post->update(['title' => 'modern war far 2','count' => $inc]);

        dump($post);


});

Route::fallback(function(){ 
    return redirect(route('login'));
});