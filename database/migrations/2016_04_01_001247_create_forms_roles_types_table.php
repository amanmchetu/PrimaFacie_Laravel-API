<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsRolesTypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms_roles_types', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('form_id')->nullable();
			$table->string('form_role_id', 11)->nullable();
			$table->string('role_model_prefix', 250)->nullable();
			$table->string('form_role2_id', 11)->nullable();
			$table->string('role2_model_prefix', 250)->nullable();
			$table->string('form_role3_id', 11)->nullable();
			$table->string('role3_model_prefix', 250)->nullable();
			$table->string('form_role4_id', 11)->nullable();
			$table->string('role4_model_prefix', 250)->nullable();
			$table->string('form_role5_id', 11)->nullable();
			$table->string('role5_model_prefix', 250)->nullable();
			$table->string('form_role6_id', 11)->nullable();
			$table->string('role6_model_prefix', 250)->nullable();
			$table->string('form_role7_id', 11)->nullable();
			$table->string('role7_model_prefix', 250)->nullable();
			$table->string('form_role8_id', 11)->nullable();
			$table->string('role8_model_prefix', 250)->nullable();
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
		Schema::drop('forms_roles_types');
	}

}
