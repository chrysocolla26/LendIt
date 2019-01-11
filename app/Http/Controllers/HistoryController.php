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
    	$i = 0;
    	$lends = [];
    	foreach ($posts as $post) {
    		$lend = Borrow::where('product_id', '=', $post->id)->first();
    		if($lend){
    			$lends[$i] = $lend;
    			$i = $i+1;
    		}
    	}
    	return view('history.lend-history',compact('lends'));
    }
}
