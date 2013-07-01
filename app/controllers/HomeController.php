<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('pages.home');
	}

	public function dashboard()
	{
		$user_id = Auth::user()->id;
		$pledges = Pledge::where('user_id', $user_id)->orderBy('created_at', 'desc')->take(5)->get();
		$actions = Action::join('pledges as p', 'actions.pledge_id', '=', 'p.id')->where('p.user_id', '=', $user_id)->get();

		return View::make("pages.dashboard", compact('pledges', 'actions'));		
	}
}