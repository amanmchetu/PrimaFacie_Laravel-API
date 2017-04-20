<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCustomFieldsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('custom_fields', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('label', 250)->nullable();
			$table->integer('module_id')->nullable();
			$table->integer('type_id')->nullable();
			$table->text('default_value')->nullable();
			$table->timestamps();
			$table->integer('clio_id')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('custom_fields');
	}

}
