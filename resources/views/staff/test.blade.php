@extends('layouts.master')

@section('title', 'HOME')

@section('extcss')
<link rel="stylesheet" type="text/css" href="/css/floating-labels.css">
@endsection


@section('content')
	<div class="container">
	<form class="form-signin">
    	<div class="text-center mb-4">
	    	<img class="mb-4" src="/images/logo-lendit.png" alt="" width="144px" height="144px">
	        <h1 class="h3 mb-3 font-weight-normal">Login</h1>
	        <p>Don't have account yet? Register
        		<a href="https://caniuse.com/#feat=css-placeholder-shown">here</a>.
        	</p>
    	</div>

	    <div class="form-label-group">
	    	<input type="email" id="txtEmail" class="form-control" placeholder="Email address" required>
	        <label for="txtEmail">Email address</label>
	    </div>

	    <div class="form-label-group">
	        <input type="password" id="txtPassword" class="form-control" placeholder="Password" required>
	        <label for="txtPassword">Password</label>
	    </div>

	    <div class="checkbox mb-3">
	        <label>
	          <input type="checkbox" value="remember-me"> Remember me
	        </label>
	    </div>
	    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
	    </form>
	</div>
@endsection

@section('extscript')
@endsection