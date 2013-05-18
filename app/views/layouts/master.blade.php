<!DOCTYPE HTML>
<html lang="en-gb">
	<head>
		<meta charset="UTF-8">
		<title>PromiseFit</title>
		{{ HTML::style('css/common.css') }}
        @yield('header')
	</head>
    <body>
        <div id="header">
        	<div class="container">        	
	        	{{ HTML::image('images/logo.png', 'promisefit', array('id' => 'header-logo')) }}	        	
        	</div>
            <a href="login" class="login-button">Log In</a>
        </div>
        
        <div id="navigation">
        	<div class="container">
	        	<ul>
	        		<li><a href="/">Home</a></li>
	        		<li><a href="about">About</a></li>        		
	        	</ul>
	        </div>
        </div>

        <div id="content">
        	<div class="container">
            	@yield('content')
            </div>
        </div>

        <div id="footer">
        	<div class="container">        		
        		© 2013 Promise Fit
        	</div>
        </div>
    </body>
</html>