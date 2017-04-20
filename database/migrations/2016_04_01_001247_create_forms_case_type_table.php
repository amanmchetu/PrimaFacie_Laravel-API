<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsCaseTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms_case_type', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->decimal('case_type_id', 11, 0)->nullable();
			$table->decimal('form_id', 11, 0)->nullable();
			$table->decimal('role_id', 11, 0)->nullable();
			$table->decimal('role2_id', 11, 0)->nullable();
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
		Schema::drop('forms_case_type');
	}

}
