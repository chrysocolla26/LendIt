<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Post;
use App\User;

class UserController extends Controller
{
    function register(Request $request){
    	// dd($request);
    	$newUser = new User();
    	$newUser->name = $request->full_name;
    	$newUser->email = $request->email;
    	$newUser->password = $request->password;
    	$newUser->address = $request->address;
    	$newUser->role = 'user';
    	$newUser->save();
    	return redirect('/login');
    }

    function login(Request $request){
        $data = User::where('email', $request->email)->first();
        // dd($data);
        if($data!=null){
            if($data->password == $request->password){
                Session::put("name",$data->name);
                Session::put("id",$data->id);
                Session::put("role",$data->role);
                Session::put("isLogin",TRUE);
                return redirect('/');
            }else{
                return redirect('/login')->with("alert","Invalid Password");
            }
        }else{
            return redirect('/login')->with("alert","Invalid Email");
        }
    }
    public function logout(){
        Session::flush();
        
        return redirect('');
    }    
}
