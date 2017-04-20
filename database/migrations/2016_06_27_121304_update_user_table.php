<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function ($table) {
			$table->string('google_token', 250)->nullable();
			$table->string('google_drive', 3)->nullable();
			$table->text('google_calendars')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function ($table) {
			$table->dropColumn('google_token');
			$table->dropColumn('google_drive');
			$table->dropColumn('google_calendars');
		});
	}


}
