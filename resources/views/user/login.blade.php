@extends('layouts.nav')

@section('title', 'Login')

@section('extcss')
<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection


@section('content')
<div class="container">
	<form method="POST" action="/login-post" enctype="multipart/form-data" class="form-signin">
		{{csrf_field()}}
    	<div class="text-center mb-4">
	    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
	        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
	        <p>Don't have account yet? Register
        		<a href="/register">here</a>.
        	</p>
    	</div>

	    <div class="form-label-group">
	    	<input type="email" id="txtEmail" name="email" class="form-control" placeholder="Email address" required>
	        <label for="txtEmail">Email address</label>
	    </div>

	    <div class="form-label-group">
	        <input type="password" id="txtPassword" name="password" class="form-control" placeholder="Password" required>
	        <label for="txtPassword">Password</label>
	    </div>

	    <div class="checkbox mb-3">
	        <label>
	          <input type="checkbox" value="remember-me"> Remember me
	        </label>
	    </div>
	    <div class="alert">
	    	@if(Session::has('alert'))
                <b style="color: red">{{Session::get('alert')}}</b>
            @endif
	    </div>
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	</form>
</div>
@endsection

@section('extscript')
@endsection