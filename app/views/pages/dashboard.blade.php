@extends('layouts.master')

@section('header')
	{{ HTML::style('css/home.css') }}
	{{ HTML::style('css/dashboard.css') }}
@stop

@section('content')
	<div id="landing-headline">
		<div id="panel-container">
    		<div class="panel">
    			<h3>Active Pledges</h3>
                You do not have any active pledges. <br />
                Why not <a href="pledge/create">Create</a> one?
    		</div>
    		<div class="panel">
    			<h3>Pledge Targets</h3>
    		</div>
    		<div class="panel">
    			<h3>Pledge History</h3>
    		</div>
	    </div>	    
	</div>
@stop