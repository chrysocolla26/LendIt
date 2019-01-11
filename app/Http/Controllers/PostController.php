<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(4);
        return view('user.home', compact('posts'));
    }

    public function profile($name){
    	$user = User::where('name', 'LIKE', $name)->first();
        $posts = Post::orderBy('created_at', 'DESC')->where('user_id', '=', $user->id)->paginate(4);
        return view('user.profile', compact('posts', 'user'));
    }

    public function search(Request $request){
        $namaProduk = $request->txtSearch;
        $posts = Post::where('product_name', 'LIKE', '%'.$namaProduk.'%')->orderBy('created_at', 'DESC')->paginate(4);

        return view('user.home', compact('posts'));
    }
}
