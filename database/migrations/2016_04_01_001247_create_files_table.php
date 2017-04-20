<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('files', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('original_name', 250)->nullable();
			$table->string('name', 250)->nullable();
			$table->decimal('size', 11)->nullable();
			$table->integer('case_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('contact_id')->nullable();
			$table->integer('owner_id')->nullable();
			$table->string('mime', 350)->nullable();
			$table->string('storage_name', 250)->nullable();
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
		Schema::drop('files');
	}

}
