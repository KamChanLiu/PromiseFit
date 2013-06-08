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
                @if (count($pledges) > 0)
                    You have <b>{{ count($pledges) }}</b> active pledge(s).
                    <br />
                    @foreach ($pledges as $pledge)
                        <div class="dashboard-pledge">
                            <h3>{{ $pledge['activity'] }}<h3>
                            X / {{ $pledge['frequency'] }} <br />
                            <b>{{ $pledge['interval'] - ((date("Y-m-d") - $pledge['start_date']) % $pledge['interval']) }}</b>
                             days to go!
                            <a href="pledge/view/{{ $pledge['id'] }}">View</a>
                        </div>
                    @endforeach
                    <br />
                    <a href="pledge/create">Make</a> another!
                @else
                    You do not have any active pledges. <br />
                    Why not <a href="pledge/create">Create</a> one?
                @endif                            
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