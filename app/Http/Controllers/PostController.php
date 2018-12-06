<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('post_time', 'DESC')->get();
        return view('user.home', compact('posts'));
    }
}
