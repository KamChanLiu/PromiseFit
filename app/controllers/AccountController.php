<?php

class AccountController extends BaseController {
	
	public $restful = true;

	public function getRegister()
	{
		return View::make('pages.register');		
	}

	public function postRegister()
	{
		// Logic to create new account
	}	

	public function getLogin()
	{
		return View::make('pages.login');
	}
	
	public function postLogin()
	{
		$userdata = array(
        	'username' => Input::get('username'),
        	'password' => Input::get('password')
	    );

	    if ( Auth::attempt($userdata) )
	    {
	        return Redirect::to('home');
	    }
	    else
	    {
	        return Redirect::to('account/login')->with('login_errors', true);
	    }
	}

	public function getLogout()
	{
		Auth::logout();
    	return Redirect::to('account/login');
	}
}