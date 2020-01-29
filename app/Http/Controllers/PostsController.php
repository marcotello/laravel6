<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {
        // This is a normal query thatwe can execute 
        // $post = DB::table('posts')->where('slug', $slug)->first();

        // This is an eloquent query that PHP is going to form and execute.
        $post = Post::where('slug', $slug)->firstOrFail();
        
        // this is a qick way to inspect a variable in the browser and see what it contains.
        // dd($post);
        
        return view('post', [
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
