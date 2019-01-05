<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function borrow(){
    	return $this->hasOne(Borrow::class);
 	}

 	public function user(){
 		return $this->belongsTo(User::class, 'user_id');
 	}
}
