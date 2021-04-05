<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Post;

class PostsController 
{
    public function show($slug)
    {
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
            /* $posts  = [
                'my-first-post' => 'Hello',
                'my-second-post' => 'Now i am getting the hang of this blogging thing'
            ]; */

            /* $post = DB::table('posts')->where('slug', $slug)->first(); */

            /* if(! $post){
                abort(404);
            } */
    }
}