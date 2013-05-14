<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePledgesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pledges', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('frequency');
			$table->float('amount');
			$table->integer('good_charity_id');
			$table->integer('bad_charity_id');
			$table->boolean('closed');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pledges');
	}

}
