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
                            <a href="pledge/view/{{ $pledge['id'] }}">
                                <div class="pledge-detail">
                                    <span class="pledge-title">{{ $pledge['activity'] }}</span>
                                    <br />
                                    <span class="pledge-description">{{ $pledge['description'] }}</span>
                                    <br/>
                                    <b>{{ $pledge['interval'] - ((date("Y-m-d") - $pledge['start_date']) % $pledge['interval']) }}</b>
                                    days to go!
                                </div>
                                <div class="counter">
                                    <span class="counter-value">{{ $pledge->getProgress() }}</span>
                                    <span class="counter-divider">/</span>
                                    <span class="counter-total">{{ $pledge['frequency'] }}</span>
                                </div>
                            </a>                            
                        </div>
                    @endforeach
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
    			<h3>Activity History</h3>
                @if (count($actions) > 0)
                    @foreach($actions as $action)
                        <div class="dashboard-activity">
                            {{ $action['comment'] }}
                            <br/> 
                            {{ $action['created_at']->format('d-m-Y'); }}
                        </div>
                    @endforeach
                @else
                    You have no recent activies...
                    <a href="#">Check In!</a>
                @endif
    		</div>
	    </div>	    
	</div>
@stop