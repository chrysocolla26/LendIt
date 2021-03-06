<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;

// class User extends Authenticatable, Model
// {
//     use Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'name', 'email', 'password',
//     ];

//     /**
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
//      */
//     protected $hidden = [
//         'password', 'remember_token',
//     ];
// }

class User extends Model{
    // public function borrow(){
    //     return $this->hasMany(Borrow::class);
    // }

    // public function post(){
    // 	return $this->hasMany(Post::class);
    // }

	public function post(){
		return $this->hasMany(Borrow::class);
	}

	public function borrow(){
		return $this->hasMany(Post::class);
	}
    
}