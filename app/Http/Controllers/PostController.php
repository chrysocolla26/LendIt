<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;
use App\Borrow;

class PostController extends Controller
{
    public function home()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(4);
        
        $postNotification = Post::where('user_id', '=', Session("id"))->get();
        $i = 0;
        $lends = [];
        foreach ($postNotification as $post) {
            $lend = Borrow::where('product_id', '=', $post->id)->first();
            if($lend){
                $lends[$i] = $lend;
                $i = $i+1;
            }
        }
        $borrowNotification = Borrow::where('borrower_id', Session("id"))->get();
        foreach ($borrowNotification as $borrow) {
            $lends[$i] = $borrow;
            $i = $i+1;
        }
        Session::put("lends", $lends);
        return view('user.home', compact('posts', 'lends', 'borrowNotification'));
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
