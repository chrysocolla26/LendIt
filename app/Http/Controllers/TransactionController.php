<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class TransactionController extends Controller
{
    public function lendIndex(){
    	return view('transaction.lend');
    }

    public function lendItem(Request $request){
    	dd($request->product_description);
    }

    public function borrowIndex(){
        $posts = Post::all();
    	return view('transaction.borrow', compact('posts'));
    }

    public function borrowItem(Request $request){
    	dd($request->product_description);
    }
}
