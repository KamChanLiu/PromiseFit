<?php

class AccountController extends BaseController {
	
	public function login()
	{
		return View::make('pages.login');
	}
}