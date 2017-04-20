<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cases', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->integer('contact_id');
			$table->integer('case_type_id');
			$table->integer('case_status_id');
			$table->timestamps();
			$table->integer('beneficiary_id')->nullable();
			$table->integer('practice_area_id')->nullable();
			$table->integer('user_id')->nullable();
			$table->integer('payment_type_id')->nullable();
			$table->integer('clio_id')->nullable();
			$table->string('reciept_number')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('cases');
	}

}
