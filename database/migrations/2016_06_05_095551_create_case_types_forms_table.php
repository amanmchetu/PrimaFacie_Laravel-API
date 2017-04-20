<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseTypesFormsTable extends Migration {

	public function up()
	{
		Schema::create('forms_case_type_custom', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->decimal('case_type_id', 11, 0)->nullable();
			$table->decimal('form_id', 11, 0)->nullable();
			$table->decimal('role_id', 11, 0)->nullable();
			$table->decimal('role2_id', 11, 0)->nullable();
			$table->timestamps();
			$table->softDeletes()->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forms_case_type_custom');
	}

}
