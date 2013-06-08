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
			$table->string('activity');
			$table->string('description');
			$table->integer('frequency');
			$table->integer('interval');
			$table->float('amount');
			$table->integer('good_charity_id');
			$table->integer('bad_charity_id');
			$table->boolean('closed');
			$table->date('start_date');
			$table->date('end_date');
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
