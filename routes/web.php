<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('home',[
        'title' => "Home"
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'name' => "Ngafiff Hasyim ash'ari",
        'email' => 'ngafifhasyim209@gmail.com',
        'image' => 'IMG_6908.PNG',
        'title' => 'About'
    ]);
});



Route::get('/blog', [PostController::class, 'index']); 
Route::get('/posts/{slug}', [PostController::class, 'show']);
