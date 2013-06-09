@extends('layouts.master')

@section('header')
	
@stop

@section('scripts')
@stop

@section('content')
    <h2>{{ $pledge['activity'] }}</h2>
    <h3>{{ $pledge['description'] }}</h3>
     
    {{ $pledge -> getProgress() }} / {{ $pledge['frequency'] }} complete <br />
    <b>{{ $pledge['interval'] - ((date("Y-m-d") - $pledge['start_date']) % $pledge['interval']) }}</b>
     days to go!

     <h3>Activity Log</h3>
     @foreach ($pledge->getActions() as $action)
     	{{ $action['comment'] }}
     	{{ $action['created_at'] }}
     @endforeach
@stop