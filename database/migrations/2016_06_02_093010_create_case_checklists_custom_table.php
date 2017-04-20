<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseChecklistsCustomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_checklists_custom', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_type_id');
			$table->integer('case_id');
			$table->integer('completed');
			$table->text('name');
			$table->integer('priority')->nullable();
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
		Schema::drop('case_checklists_custom');
	}

}
