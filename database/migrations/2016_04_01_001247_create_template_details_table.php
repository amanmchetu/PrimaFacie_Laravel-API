<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTemplateDetailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('template_details', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('template_id')->nullable();
			$table->string('pdf_field', 250)->nullable();
			$table->text('model', 65535)->nullable();
			$table->string('value', 250)->nullable();
			$table->string('field_type', 5)->nullable();
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
		Schema::drop('template_details');
	}

}
