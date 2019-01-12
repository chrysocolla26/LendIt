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

    public function borrowCancel($product_name, $product_id, $id){
    	$borrows = Borrow::where([
    		['borrower_id', '=', Session("id")],
    		['product_id', '=', $product_id],
    		['id', '=', $id],
    	])
    	->first();
    	$borrows->delete();
    	return redirect('/borrow-history');
    }

    public function borrowCancelPayment($product_name, $product_id, $id){
    	$post = Post::where('id', '=', $product_id)->first();
    	$borrows = Borrow::where([
    		['borrower_id', '=', Session("id")],
    		['product_id', '=', $product_id],
    		['id', '=', $id],
    	])
    	->first();
    	$post->product_stock = $post->product_stock + $borrows->borrow_qty;
    	$post->save();
    	$borrows->delete();
    	return redirect('/borrow-history');
    }

    public function borrowPay($product_name, $product_id, $id){
    	$borrows = Borrow::where([
    		['borrower_id', '=', Session("id")],
    		['product_id', '=', $product_id],
    		['id', '=', $id],
    	])
    	->first();
    	$borrows->status = "Paid";
    	$borrows->save();
    	return redirect('/borrow-history');
    }

    public function borrowApprove($product_name, $product_id, $id){
    	$borrows = Borrow::where([
    		['borrower_id', '=', Session("id")],
    		['product_id', '=', $product_id],
    		['id', '=', $id],
    	])
    	->first();
    	$borrows->status = "On Going";
    	$borrows->save();
    	return redirect('/borrow-history');
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
    	Session::put("lends", $lends);
    	return view('history.lend-history',compact('lends'));
    }

    public function lendAccept($product_name, $product_id, $id){
    	$post = Post::where('id', '=', $product_id)->first();
    	$lendItem = [];
    	$lends = Session("lends");
    	foreach ($lends as $lend) {
    		if($lend->product_id == $post->id && $lend->id == $id)
    			$lendItem = $lend;
    	}
    	$lendItem->status = "Pay";
    	$lendItem->save();

    	$post->product_stock = $post->product_stock - $lendItem->borrow_qty;
    	$post->save();
    	Session::forget("lends");
    	return redirect('/lend-history');
    }

    public function lendDecline($product_name, $product_id, $id){
    	$post = Post::where('id', '=', $product_id)->first();
    	$lendItem = [];
    	$lends = Session("lends");
    	foreach ($lends as $lend) {
    		if($lend->product_id == $post->id && $lend->id == $id)
    			$lendItem = $lend;
    	}
    	$lendItem->delete();
    	Session::forget("lends");
    	return redirect('/lend-history');
    }

    public function lendDeliver($product_name, $product_id, $id){
    	$lends = Borrow::where([
    		['product_id', '=', $product_id],
    		['id', '=', $id],
    	])
    	->first();
    	$lends->status = "Delivered";
    	$lends->save();
    	return redirect('/lend-history');
    }
}
