<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionnairesFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaires_fields', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('form_id');
			$table->string('field');
			$table->text('value', 65535)->nullable();
			$table->string('model', 250)->nullable();
			$table->integer('field_type')->nullable();
			$table->integer('page')->nullable();
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
		Schema::drop('questionnaires_fields');
	}

}
