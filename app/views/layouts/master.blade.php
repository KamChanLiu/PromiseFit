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
    @yield('scripts')
</html>