<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Organisation extends Eloquent {

	/* fillable property to allow seeding of DB */
	/*protected $fillable = array('name', 'password', 'email');*/

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'organisations';
}