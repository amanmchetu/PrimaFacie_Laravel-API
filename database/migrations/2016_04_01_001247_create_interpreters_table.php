<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateInterpretersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('interpreters', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('last_name', 250)->nullable();
			$table->string('first_name', 250)->nullable();
			$table->string('business_name', 250)->nullable();
			$table->string('address', 250)->nullable();
			$table->string('address_apt_ck', 5)->nullable();
			$table->string('address_ste_ck', 5)->nullable();
			$table->string('address_floor_ck', 5)->nullable();
			$table->string('address_apt_ste_flr_numbertxt', 25)->nullable();
			$table->string('city', 250)->nullable();
			$table->string('state', 250)->nullable();
			$table->string('zip_code', 250)->nullable();
			$table->string('foreign_province', 250)->nullable();
			$table->string('foreign_postal_code', 250)->nullable();
			$table->string('country', 250)->nullable();
			$table->string('phone', 250)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('language', 250)->nullable();
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
		Schema::drop('interpreters');
	}

}
