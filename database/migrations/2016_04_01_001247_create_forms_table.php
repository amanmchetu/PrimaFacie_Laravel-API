<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFormsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forms', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('name', 250)->nullable();
			$table->text('title', 65535)->nullable();
			$table->string('public_templeate', 250)->nullable();
			$table->string('pages')->nullable();
			$table->string('pdf_template')->nullable();
			$table->integer('practice_area_id')->nullable();
			$table->string('rev_date', 20)->nullable();
			$table->string('exp_date', 20)->nullable();
			$table->integer('process_version')->nullable()->default(1);
			$table->text('instructions_url', 65535)->nullable();
			$table->string('enable', 1)->nullable();
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
		Schema::drop('forms');
	}

}
