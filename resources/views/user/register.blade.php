@extends('layouts.nav')

@section('title', 'Login')

@section('extcss')
<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection


@section('content')
	<div class="container">
	<form method="POST" action="/register-post" enctype="multipart/form-data" class="form-signin">
		{{csrf_field()}}
    	<div class="text-center mb-4">
	    	<img class="mb-4" id="imageBackground" src="" alt="" width="144px" height="144px">
	        <h1 class="h3 mb-3 font-weight-normal">Register</h1>
	        <p>Already have an account? Login
        		<a href="/login">here</a>.
        	</p>
    	</div>

	    <div class="form-label-group">
	    	<input type="text" name="full_name" id="Name" class="form-control" placeholder="Full Name" required>
	        <label for="Name">Full Name</label>
	    </div>

	    <div class="form-label-group">
	    	<input type="email" name="email" id="Email" class="form-control" placeholder="Email address" required>
	        <label for="Email">Email address</label>
	    </div>

	    <div class="form-label-group">
	        <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required>
	        <label for="Password">Password</label>
	    </div>

	    <div class="form-label-group">
			<textarea name="address" id="Address" class="form-control" rows="3" placeholder="address"></textarea>
	        <label for="Address">Address</label>
	    </div>
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    </form>
	</div>
@endsection

@section('extscript')
@endsection