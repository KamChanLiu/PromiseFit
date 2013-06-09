<?php

class Pledge extends Eloquent {

	/* fillable property to allow seeding of DB */
	/*protected $fillable = array('name', 'password', 'email');*/

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'pledges';

	public function getProgress()
	{
		return count(Action::where('pledge_id', $this->id)->get());
	}

	public function getActions()
	{
		return Action::where('pledge_id', $this->id)->OrderBy('created_at')->get();
	}
}