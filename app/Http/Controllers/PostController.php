<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::all();
        return view('user.home', compact('posts'));
    }
}
