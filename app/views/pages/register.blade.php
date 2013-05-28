@extends('layouts.public')

@section('content')
    {{ Form::open(array('url' => 'account/register')) }}
        <!-- check for login errors flash var -->
        @if (Session::has('register_errors'))
            <span class="error">Error</span>
        @endif
        <!-- username field -->
        <p>{{ Form::label('username', 'Username') }}</p>
        <p>{{ Form::text('username') }}</p>
        <!-- password field -->
        <p>{{ Form::label('password', 'Password') }}</p>
        <p>{{ Form::password('password') }}</p>
        <!-- email field -->
        <p>{{ Form::label('email', 'Email') }}</p>
        <p>{{ Form::email('email') }}</p>
        <!-- submit button -->
        <p>{{ Form::submit('Sign Up') }}</p>
    {{ Form::close() }}
@stop