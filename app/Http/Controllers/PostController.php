<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function home()
    {
        $posts = '';
        $posts = Post::orderBy('post_time', 'DESC')->get();
        return view('user.home', compact('posts'));
    }

    public function profile($name){
        $posts = '';
        $user = '';
    	$user = User::where('name', 'LIKE', '%'.$name.'%')->first();
        $posts = Post::where('user_id', '=', $user->id)->get();
        return view('user.profile', compact('posts'));
    }
}
