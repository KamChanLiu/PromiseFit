@extends('layouts.public')

@section('header')
	{{ HTML::style('css/home.css') }}
@stop

@section('content')
    <div class="container">
    	<div id="landing-headline">
			<div id="headline-container">
		    	<div class="headline">
		    		Keep Fit, <br/>
		    		Save the World!
		    	</div>    	
		    	<div class="headline-text">
		    		Lorem ipsum dolor sit amet, consectetur adipiscing elit. <br />
		    		Donec venenatis pretium neque vel facilisis. <br />
		    		Quisque varius odio vitae risus porttitor pretium. 
		    	</div>
				<a href="account/register" class="headline-button">START TODAY</a>
		    </div>
		    <div class="headline-image"></div>
	    </div>
    </div>
@stop