<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;

class TransactionController extends Controller
{
    public function lendIndex(){
    	return view('transaction.lend');
    }

    public function lendItem(Request $request){
        if(!Session('isLogin'))
            return redirect('/login');
        else{
            $image = $request->product_image;
            $image->move('images', $image->getClientOriginalname());

            $newPost = new Post();
            $newPost->user_id = Session('id');
            $newPost->link = $image->getClientOriginalname();
            $newPost->post_time = date("Y-m-d");
            $newPost->product_name = $request->product_name;
            $newPost->product_stock = $request->product_stock;
            $newPost->product_description = $request->product_description;
            $newPost->product_minimum = $request->product_minimum;
            $newPost->product_maximum = $request->product_maximum;
            $newPost->price = $request->price;
            $newPost->save();
            return redirect('/');
        }
    }

    public function borrowIndex($product_name, $id){
        $post = '';
        $post = Post::where('product_name', 'LIKE', $product_name)->where('id', 'LIKE', $id)->first();
    	return view('transaction.borrow', compact('post'));
    }

    public function borrowItem(Request $request){

    }

    public function editIndex($product_name, $id){
        $post = '';
        $post = Post::where('product_name', 'LIKE', $product_name)->where('id', 'LIKE', $id)->first();
        Session::put("post", $post);
        return view('transaction.edit', compact('post'));
    }

    public function editItem(Request $request){
        $image = $request->product_image;
        $image->move('images', $image->getClientOriginalname());

        $post = Session("post");
        $post->user_id = Session('id');
        $post->link = $image->getClientOriginalname();
        $post->post_time = date("Y-m-d");
        $post->product_name = $request->product_name;
        $post->product_stock = $request->product_stock;
        $post->product_description = $request->product_description;
        $post->product_minimum = $request->product_minimum;
        $post->product_maximum = $request->product_maximum;
        $post->price = $request->price;
        $post->save();
        return redirect('/');
    }

    public function deleteItem(){
        $post = Session("post");
        $post->delete();
        Session::forget("post");
        return redirect('/');
    }
}
