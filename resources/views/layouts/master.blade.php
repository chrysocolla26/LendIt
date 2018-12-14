<!DOCTYPE html>
<html>
<head>
    <title>LendIt - @yield('title')</title>

    <link rel="icon" href="{{ URL::asset('images/logo-lendit.png') }}">
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}"> --}}
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/new-main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('extcss')
</head>
<body>
    <div class="page">
		<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
			<div class="logo">
    			<img src="{{ URL::asset('images/logo-lendit.png') }}" style="height: 50px;">
    		</div>
      		<a class="navbar-brand" href="#">Lend It</a>
	      	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
	        	<span class="navbar-toggler-icon"></span>
	      	</button>

	      	<div class="collapse navbar-collapse" id="navbarsExample03">
	        	<ul class="navbar-nav mr-auto">
	          		<li class="nav-item active">
	            		<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
	          		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="#">Link</a>
	          		</li>
	          		<li class="navi-tem">
	            		<a class="nav-link disabled" href="#">Disabled</a>
	          		</li>
	          		<li class="nav-item">
	            		<a class="nav-link" href="/lend">Sell</a>
	          		</li>
	          		<li class="nav-item dropdown">
	            		<a class="nav-link dropdown-toggle" href="https://example.com" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
	            		<div class="dropdown-menu" aria-labelledby="dropdown03">
	              			<a class="dropdown-item" href="#">Action</a>
	              			<a class="dropdown-item" href="#">Another action</a>
	              			<a class="dropdown-item" href="#">Something else here</a>
	           		 	</div>
	          		</li>
	        	</ul>
	        	<form class="form-inline my-2 my-md-0">
	          		<input class="form-control" type="text" placeholder="Search">
        		</form>
	      	</div>
	    </nav>
        <div class="page-content">
        	@yield('content')
        </div>
        <footer class="footer">
	      <div class="container">
	        <span class="text-muted">&copy; Copyright by LendIt</span>
	      </div>
	    </footer>
    </div>

    {{-- <script type="text/javascript" src="js/main.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('extscript')
</body>
</html>