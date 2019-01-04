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
        $image = $request->product_image;
        $image->move('images', $image->getClientOriginalname());

        $newPost = new Post();
        $newPost->user_id = 1;
        $newPost->link = $image->getClientOriginalname();
        $newPost->post_time = date("Y-m-d");
        $newPost->product_name = $request->product_name;
        $newPost->product_stock = $request->product_stock;
        $newPost->product_description = $request->product_description;
        $newPost->product_minimum = $request->product_minimum;
        $newPost->product_maximum = $request->product_maximum;
        $newPost->save();
        return redirect('/');
    }

    public function borrowIndex($product_name, $id){
        $post = '';
        $post = Post::where('product_name', 'LIKE', $product_name)->where('id', 'LIKE', $id)->first();
    	return view('transaction.borrow', compact('post'));
    }

    public function borrowItem(Request $request){
        
    }
}
