<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are load(['category'])ed by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('posts', [
        "posts" => Post::latest()/* ->with(['category', 'author']) */->get()
    ]);
});

Route::get('posts/{post:slug}', function (Post $post) {
    return view("post", [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        "posts" => $category->posts/* ->load(['category', 'author']) */
    ]);
});

Route::get('authors/{author:username}', function (User $author) {
    return view('posts', [
        "posts" => $author->posts/* ->load(['category', 'author']) */
    ]);
});