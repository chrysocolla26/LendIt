<!DOCTYPE html>
<html>
<head>
    <title>LendIt - @yield('title')</title>

    <link rel="icon" href="{{ URL::asset('images/logo-lendit.png') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/new-main.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    @yield('extcss')
</head>
<body>
    <div class="page">
    		@yield('navbar')
        <div class="page-content">
        	@yield('content')
        </div>
        <footer class="footer text-muted">
        	&copy; Copyright by LendIt
	    </footer>
    </div>

    {{-- <script type="text/javascript" src="js/main.js"></script> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    @yield('extscript')
</body>
</html>