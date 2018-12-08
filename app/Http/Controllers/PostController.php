<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('post_time', 'DESC')->get();
        return view('user.home', compact('posts'));
    }

    public function profile($name){
    	$id = User::where('name', 'LIKE', '%'.$name.'%')->get();
    	$posts = Post::where('user_id', '=', $id[0]->id)->get();
        return view('user.home',compact('posts'));
    }
}
