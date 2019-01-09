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
	    	<input type="text" name="full_name" id="Name" class="form-control" placeholder="Full Name" required value="{{ old('full_name') }}">
	        <label for="Name">Full Name</label>
	    </div>

	    <div class="form-label-group">
	    	<input type="email" name="email" id="Email" class="form-control" placeholder="Email address" required value="{{ old('email') }}">
	        <label for="Email">Email address</label>
	    </div>

	    <div class="form-label-group">
	    	<input type="number" name="phone" id="Phone" class="form-control" placeholder="Phone Number" required value="{{ old('phone') }}">
	        <label for="Phone">Phone Number</label>
	    </div>

	    <div class="form-label-group">
	        <input type="password" name="password" id="Password" class="form-control" placeholder="Password" required value="{{ old('password') }}">
	        <label for="Password">Password</label>
	    </div>

	    <div class="form-label-group">
			<textarea name="address" id="Address" class="form-control" rows="3" placeholder="address">{{ old('address') }}</textarea>
	        <label for="Address">Address</label>
	    </div>

		<div class="form-group upload-image">
	        <div class="input-group mb-3">
			  <div class="input-group-prepend">
			    <span class="input-group-text" id="file-name">Upload</span>
			  </div>
			  <div class="custom-file">
			    <input type="file" class="custom-file-input" id="imgInp" aria-describedby="file-name" name="profile_picture" onchange="$(this).next().after().text($(this).val().split('\\').slice(-1)[0])"> 
			    <label class="custom-file-label" for="imgInp"></label>
			  </div>
			</div>
	    </div>

   	 	<div class="form-label-group">
	        @if(isset($errors))
	            @foreach($errors->all() as $error)
	                {{ $error }} <br>
	            @endforeach
	        @endif
	    </div>

	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    </form>
	</div>
@endsection

@section('extscript')
@endsection