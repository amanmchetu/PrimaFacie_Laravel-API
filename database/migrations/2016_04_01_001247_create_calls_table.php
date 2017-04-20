<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCallsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('calls', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('contact_id')->nullable();
			$table->integer('case_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->text('call', 65535)->nullable();
			$table->string('type')->nullable();
			$table->timestamps();
			$table->string('phone', 250)->nullable();
			$table->integer('assigned_to_id')->nullable();
			$table->string('status')->nullable();
			$table->integer('send_notify')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('calls');
	}

}
