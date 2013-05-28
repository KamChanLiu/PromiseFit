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
	        	<a href="../home" id="home-link">
                    {{ HTML::image('images/logo.png', 'promisefit', array('id' => 'header-logo')) }}                
                </a>	        	
        	</div>
            
            {{ HTML::link('account/login', 'Login', array('class' => 'login-button')) }} 
        
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