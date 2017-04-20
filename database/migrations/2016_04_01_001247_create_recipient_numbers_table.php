<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRecipientNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipient_numbers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('case_id')->nullable();
			$table->integer('form_id')->nullable();
			$table->string('recipient', 250)->nullable();
			$table->string('last_status', 500)->nullable();
			$table->string('last_checked', 150)->nullable();
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
		Schema::drop('recipient_numbers');
	}

}
