<?php

namespace App\Http\Controllers;

use App\Post;
use File;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function show($id) {
        $post = Post::with('category')->findOrFail($id);
dd(markdown($post->content));
        return view('post', compact('post'));
    }
}
