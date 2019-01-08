<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public function user(){
    	return $this->belongsTo(User::class, 'borrower_id');
 	}

	public function post(){
    	return $this->belongsTo(Post::class, 'product_id');
 	}
}
