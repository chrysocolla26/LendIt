<!DOCTYPE html>
<html>
<head>
    <title>LendIt - @yield('title')</title>

    <link rel="icon" href="images/logo-lendit.png">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <style type="text/css">
        .page-footer{
            width: 100%;
            position: absolute;
            left: 0;
        }

        .footer-text{
            text-align: center;
            font-size: 20px;
        }
    </style>
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
        	<div class="footer-text">
                &copy; Copyright by LendIt
            </div>
            <div class="sosmed">
    
            </div>
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
    @yield('extscript')
</body>
</html>