@extends('layouts.master')

@section('header')
	{{ HTML::style('css/home.css') }}
	{{ HTML::style('css/shared/nlform.css') }}
@stop

@section('scripts')
    <script src="scripts/shared/nlform.js"></script>
    <script>
        var nlform = new NLForm( document.getElementById( 'nl-form' ) );
    </script>
@stop

@section('content')
    <form id="nl-form" class="nl-form">
                    I want to
                    <select>
                        <option value="1" selected>Run</option>
                        <option value="2">Walk</option>
                        <option value="3">Cycle</option>
                        <option value="4">Lift</option>
                        <option value="2">Work Out</option>
                    </select>
                    <br />
                    <select>
                        <option value="1" selected>one</option>
                        <option value="2">two</option>
                        <option value="3">three</option>
                        <option value="4">four</option>
                        <option value="2">five</option>
                    </select>
                    times
                    <br />a
                    <select>
                        <option value="1" selected>week</option>
                        <option value="1">fortnight</option>
                        <option value="2">month</option>                        
                    </select>
                    
                    <div class="nl-submit-wrap">
                        <button class="nl-submit" type="submit">Pledge!</button>
                    </div>
                    <div class="nl-overlay"></div>
                </form>
@stop