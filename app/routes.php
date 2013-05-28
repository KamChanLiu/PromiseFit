<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('account/login', 'AccountController@getLogin');
Route::post('account/login', 'AccountController@postLogin');
Route::get('account/logout', 'AccountController@getLogout');

Route::get('account/register', 'AccountController@getRegister');
Route::post('account/register', 'AccountController@postRegister');

Route::get('pledge/create', 'PledgeController@getCreate');
Route::post('pledge/create', 'PledgeController@postCreate');

Route::get('home', 'HomeController@dashboard');

// Route::get('home', function()
// {
//     if (Auth::user() === NULL)
//     {
//         return View::make('pages.home');
//     }
//     else
//     {
//         'HomeController@dashboard';
//     }
// });

Route::get('/', function()
{
    if (Auth::user() === NULL)
        {
            return View::make('pages.home');
        }
        else
        {
            return Redirect::to('home');
        }	
});

// Route::get('login', 'AccountController@login');

/*Route::post('login', function(){
	$userdata = array(
        'username' => Input::get('username'),
        'password' => Input::get('password')
    );
    if ( Auth::attempt($userdata) )
    {
        return Redirect::to('admin');
    }
    else
    {
        return Redirect::to('login')->with('login_errors', true);
    }
});

Route::get('logout', function(){
	Auth::logout();
	return Redirect::to('/');
});*/