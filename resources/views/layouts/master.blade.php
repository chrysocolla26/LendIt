<!DOCTYPE html>
<html>
<head>
    <title>LendIt - @yield('title')</title>

    <link rel="icon" href="images/logo-lendit.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    @yield('extcss')
</head>
<body>
    <div class="page">
    	<div class="page-header">
    		<a href="/">
	    		<div class="logo">
	    			<img src="images/logo-lendit.png">
	    		</div>
	    		<div class="brand">Lend It</div>
    		</a>
    		<div class="navbar">
    			  <a href="#home">Home</a>
				  <a href="#news">Products</a>
				  <a href="#contact">Contact</a>
    		</div>
    	</div>
        <div class="page-content">
        	@yield('content')
        </div>
        <div class="page-footer">
        	@include('layouts.footer');
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
    @yield('extscript')
</body>
</html>