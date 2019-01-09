<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Post;
use App\User;
use App\Borrow;

class TransactionController extends Controller
{
    public function lendIndex(){
    	return view('transaction.lend');
    }

    public function lendItem(Request $request){
        $validate = Validator::make(
        $request->all(), 
        ['product_name' => 'required',
        'product_stock' => 'required|numeric|min:1',
        'product_description' => 'required|max:255',
        'product_minimum' => 'required|numeric|min:1',
        'product_maximum' => 'required|numeric',
        'price' => 'required',
        'product_image' => 'required|mimes:jpeg,png,jpg|file',
        ]);

        if($validate->fails()){
            return redirect()->back()->withInput(Input::all())->withErrors($validate);
        }

        if(!Session('isLogin'))
            return redirect('/login');
        else{
            $image = $request->product_image;
            $image->move('images/products', $image->getClientOriginalname());

            $newPost = new Post();
            $newPost->user_id = Session("id");
            $newPost->link = $image->getClientOriginalname();
            // $newPost->post_time = date("Y-m-d");
            $newPost->product_name = $request->product_name;
            $newPost->product_stock = $request->product_stock;
            $newPost->product_description = $request->product_description;
            $newPost->product_minimum = $request->product_minimum;
            $newPost->product_maximum = $request->product_maximum;
            $newPost->price = $request->price;
            $newPost->created_at = date("Y-m-d");
            $newPost->save();
            return redirect('/');
        }
    }

    public function borrowIndex($product_name, $id){
        $post = Post::where('product_name', 'LIKE', $product_name)->where('id', 'LIKE', $id)->first();
        Session::put("post", $post);
    	return view('transaction.borrow', compact('post'));
    }

    public function borrowItem(Request $request){
        if(!Session("isLogin")){
            return redirect('/login');
        }else{
            $post = Session("post");
            $borrow = new Borrow();
            $borrow->borrower_id = Session("id");
            $borrow->product_id = $post->id;
            $borrow->borrow_qty = $request->borrow_qty;
            $borrow->borrow_days = $request->borrow_days;
            $borrow->start_date = date("Y-m-d");
            $borrow->end_date = date("Y-m-d", strtotime($borrow->start_date. ' + '.$borrow->borrow_days.' days'));
            $borrow->total_price = $post->price * $request->borrow_qty * $request->borrow_days;
            $borrow->status = "Requested";
            $borrow->created_at = date("Y-m-d");
            $borrow->save();

            $post->product_stock = $post->product_stock - $request->borrow_qty;
            $post->save();
            return redirect('/');
        }
    }

    public function editIndex($product_name, $id){
        $post = '';
        $post = Post::where('product_name', 'LIKE', $product_name)->where('id', 'LIKE', $id)->first();
        Session::put("post", $post);
        return view('transaction.edit', compact('post'));
    }

    public function editItem(Request $request){
        $validate = Validator::make(
        $request->all(), 
        ['product_name' => 'required',
        'product_stock' => 'required|numeric|min:1',
        'product_description' => 'required|max:255',
        'product_minimum' => 'required|numeric|min:1',
        'product_maximum' => 'required|numeric',
        'price' => 'required',
        // 'product_image' => 'required|mimes:jpeg,png,jpg|file',
        ]);

        if($validate->fails()){
            return redirect()->back()->withInput(Input::all())->withErrors($validate);
        }

        $post = Session("post");
        $post->user_id = Session("id");
        // $post->post_time = date("Y-m-d");
        if($request->hasfile('imgProfile')){
            $image = $request->product_image;
            $image->move('images/products', $image->getClientOriginalname());
            $post->link = $image->getClientOriginalname();
        }
        $post->product_name = $request->product_name;
        $post->product_stock = $request->product_stock;
        $post->product_description = $request->product_description;
        $post->product_minimum = $request->product_minimum;
        $post->product_maximum = $request->product_maximum;
        $post->price = $request->price;
        $post->created_at = date("Y-m-d");
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
