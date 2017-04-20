<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tasks', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('subject', 250)->nullable();
			$table->text('body', 65535)->nullable();
			$table->integer('priority_id')->nullable();
			$table->date('due_date')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('case_id')->nullable();
			$table->integer('contact_id')->nullable();
			$table->timestamps();
			$table->integer('status_id')->nullable();
			$table->integer('assigned_to')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tasks');
	}

}
