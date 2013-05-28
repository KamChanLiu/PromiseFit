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
<<<<<<< HEAD
	        	<a href="../home" id="home-link">
                    {{ HTML::image('images/logo.png', 'promisefit', array('id' => 'header-logo')) }}	        	
	            </a>
                <div class="header">
                                    
                    Welcome back, {{ Auth::user()->username }}!<br />
                    {{ HTML::link('account/logout', 'Logout') }}
                </div>
            </div>
        <div id="navigation">
        	<div class="container">
	        	<ul>
	        		<li><a href="home">Home</a></li>
                    <li><a href="pledges">Pledges</a></li>
=======
	        	{{ HTML::image('images/logo.png', 'promisefit', array('id' => 'header-logo')) }}	        	
        	</div>
            <a href="login" class="login-button">Log In</a>
        </div>
        
        <div id="navigation">
        	<div class="container">
	        	<ul>
	        		<li><a href="/">Home</a></li>
>>>>>>> ca0c20ab20afed1d4b68f6afb6fd388b9b73b5d7
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
<<<<<<< HEAD
    @yield('scripts')
=======
>>>>>>> ca0c20ab20afed1d4b68f6afb6fd388b9b73b5d7
</html>