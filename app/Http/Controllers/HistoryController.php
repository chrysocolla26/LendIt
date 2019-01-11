<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;
use App\Borrow;

class HistoryController extends Controller
{
    public function borrowHistory(){
        $borrows = Borrow::where('borrower_id', '=', Session("id"))->get();
    	return view('history.borrow-history',compact('borrows'));
    }

    public function lendHistory(){
    	$posts = Post::where('user_id', '=', Session("id"))->get();

    	foreach ($posts as $post) {
    		$lends = Borrow::where('product_id', '=', $post->id)->get();
    		if($lends)
    			break;
    	}
    	return view('history.lend-history',compact('lends'));
    }
}
