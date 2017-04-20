<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateContactsLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('contacts_logs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('contact_id');
			$table->integer('user_id');
			$table->integer('action_id');
			$table->string('comments');
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
		Schema::drop('contacts_logs');
	}

}
