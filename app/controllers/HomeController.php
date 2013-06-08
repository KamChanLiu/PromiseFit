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
		// $pledges = Pledge::find(Auth::user()->id);
		$pledges = Pledge::find(1);
		
		return View::make('pages.dashboard')->with('pledges', Pledge::where('user_id', 1)->take(5)->get());
		// return View::make('pages.dashboard', pledges);

		// due date = interval - ((today - start) % today) + today
	}
}