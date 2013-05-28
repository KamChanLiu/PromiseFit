<?php

class PledgeController extends BaseController {
	
	public $restful = true;

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