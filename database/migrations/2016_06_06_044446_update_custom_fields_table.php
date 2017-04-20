<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCustomFieldsTable extends Migration {

	public function up()
	{
		Schema::table('custom_fields', function ($table) {
			$table->string('match', 250)->after('default_value')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('custom_fields', function ($table) {
			$table->dropColumn('match');
		});
	}

}
