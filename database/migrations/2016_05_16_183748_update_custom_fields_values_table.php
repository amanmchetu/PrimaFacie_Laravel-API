<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCustomFieldsValuesTable extends Migration {

	public function up()
	{
		Schema::table('custom_fields_values', function ($table) {
			$table->softDeletes()->after('updated_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('custom_fields_values', function ($table) {
			$table->dropColumn('deleted_at');
		});
	}

}
