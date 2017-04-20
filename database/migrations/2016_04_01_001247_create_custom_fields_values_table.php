<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomFieldsValuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_fields_values', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('field_id')->nullable();
			$table->string('item_id', 250)->nullable();
			$table->string('value', 250)->nullable();
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
		Schema::drop('custom_fields_values');
	}

}
