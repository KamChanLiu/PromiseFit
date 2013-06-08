<?php

class PledgeController extends BaseController {
	
	public $restful = true;

	public function view($id)
	{
		return View::make('pages.view')->with('pledge', Pledge::find($id));
	}

	public function getView()
	{
	}

	public function postSave()
	{
	}	

	public function getCreate()
	{
		return View::make('pages.createpledge');
	}

	public function postCreate()
	{
		return View::make('pages.createpledge');
	}

	public function postDelete()
	{
	}
}