<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
/* $files = File::files(resource_path("posts"));
    
    $posts = collect($files)
        ->map(function ($file) {
            $document = YamlFrontMatter::parseFile($file);

            return new Post(
                $document->title,
                $document->excerpt,
                $document->date,
                $document->body(),
                $document->slug
            );
        });
 */
    return view('posts', [
        "posts" => Post::all()
    ]);
});

Route::get('posts/{post}', function ($id) {
    return view("post", [
        'post' => Post::findOrFail($id)
    ]);
});
