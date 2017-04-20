<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseChecklistsTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_checklists_templates', function(Blueprint $table)
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
		Schema::drop('case_checklists_templates');
	}

}
