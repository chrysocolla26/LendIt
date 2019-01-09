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

class UserController extends Controller
{
    function register(Request $request){
        // return dd($request->all());
        $validate = Validator::make(
        $request->all(), 
        ['full_name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric',
        'password' => 'required|alpha_dash',
        'address' => 'required|max:255',
        'profile_picture' => 'required|mimes:jpeg,png,jpg|file',
        ]);

        if($validate->fails()){
            return redirect()->back()->withInput(Input::all())->withErrors($validate);
        }

    	// dd($request);
        $newUser = new User();
        $newUser->name = $request->full_name;
        $newUser->email = $request->email;
        $newUser->phone = $request->phone;
        $newUser->password = Hash::make($request->password);
        $newUser->address = $request->address;
        $newUser->role = 'user';
        $image = $request->profile_picture;
        $image->move('images/profiles', $image->getClientOriginalname());
        $newUser->picture = $image->getClientOriginalname();
        $newUser->created_at = date("Y-m-d");
    	$newUser->save();
    	return redirect('/login');
    }

    function login(Request $request){
        $data = User::where('email', $request->email)->first();
        if($data!=null){
            if(Hash::check($request->password, $data->password)){
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
