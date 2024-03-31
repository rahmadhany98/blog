<?php

use Illuminate\Support\Facades\Route;
use Spatie\Sheets\Facades\Sheets;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = Sheets::collection('posts')->all();
    return view('posts.index', [
        'posts' => $posts
    ]);
});

Route::get('/posts/{post}', function ($post) {
    return view('posts.show', [
        'post'=> $post
    ]);
});
