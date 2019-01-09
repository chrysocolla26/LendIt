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
    	$user = User::where('name', 'LIKE', $name)->first();
        $posts = Post::orderBy('post_time', 'DESC')->where('user_id', '=', $user->id)->get();
        return view('user.profile', compact('posts', 'user'));
    }

    public function search(Request $request){
        $namaProduk = $request->txtSearch;
        $posts = Post::where('product_name', 'LIKE', '%'.$namaProduk.'%')->orderBy('post_time', 'DESC')->get();

        return view('user.home', compact('posts'));
    }
}
