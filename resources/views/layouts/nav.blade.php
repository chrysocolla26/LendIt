@extends('layouts.master')
@section('navbar')
	<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
		<div class="logo">
			<img src="{{ URL::asset('images/logo-lendit.png') }}" style="height: 50px;">
		</div>
  		<a class="navbar-brand" href="/">Lend It</a>
      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarlendit" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        	<span class="navbar-toggler-icon"></span>
      	</button>

	    <div class="collapse navbar-collapse" id="navbarlendit">
	        <form class="form-inline my-2 my-md-0" method="GET" action="/search">
	          <input class="form-control" type="text" placeholder="Search" name="txtSearch" value="{{Session('namaProduk')}}">
	        </form>

	        <ul class="navbar-nav mr-auto">
	          	<li class="nav-item active">
	            	<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
	          	</li>
          		<li class="nav-item">
          			@if(Session::has('isLogin'))
            			<a class="nav-link" href="/profile/{{Session('name')}}">Profile</a>
          			@endif
          		</li>
              @if(Session::has('isLogin'))
          		<li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
            		<div class="dropdown-menu" aria-labelledby="dropdown03">
            			<a class="dropdown-item" href="/lend">Lend</a>
           		 	</div>
          		</li>
          		<li class="nav-item dropdown">
            		<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">History</a>
            		<div class="dropdown-menu" aria-labelledby="dropdown03">
            			<a class="dropdown-item" href="/lend-history">Lend History</a>
            			<a class="dropdown-item" href="/borrow-history">Borrow History</a>
           		 	</div>
          		</li>
          		@endif
          		<li class="nav-item">
            		<a class="nav-link" href="#">About Us</a>
          		</li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
    			@if(!Session::has('isLogin'))
    			<li class="nav-item">
          			<a class="nav-link" href="/login">Login</a>
          		</li>
          		<li class="nav-item">
          			<a class="nav-link" href="/register">Register</a>
          		</li>
          		@else
          		<li>
          			@if(strlen(Session('name')) > 10)
          			<span class="navbar-brand mb-0">Hello, {{substr(Session('name'),0,strrpos(Session('name'), " "))}}</span>
          			@else
          			<span class="navbar-brand mb-0">Hello, {{Session('name')}}</span>
          			@endif
          		</li>
          		<li>
          			<a class="nav-link" href="/logout">Logout</a>
          		</li>
          		@endif
    		</ul>
      	</div>
    </nav>
@endsection
