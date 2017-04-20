<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCalendarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calendars', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('title', 250)->nullable();
			$table->string('start', 250)->nullable();
			$table->string('startTimezone', 250)->nullable();
			$table->string('end', 250)->nullable();
			$table->string('endTimezone', 250)->nullable();
			$table->string('recurrenceRule', 250)->nullable();
			$table->string('recurrenceException', 250)->nullable();
			$table->string('isAllDay', 250)->nullable();
			$table->text('description', 65535)->nullable();
			$table->integer('ownerId')->nullable();
			$table->integer('contactId')->nullable();
			$table->integer('caseId')->nullable();
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
		Schema::drop('calendars');
	}

}
