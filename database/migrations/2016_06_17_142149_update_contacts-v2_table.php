<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContactsV2Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('contacts', function ($table) {
			$table->date('pd_family_petition_date')->nullable();
			$table->string('pd_family_petition_country', 250)->nullable();
			$table->string('pd_family_petition_category', 250)->nullable();
			$table->date('pd_employment_date')->nullable();
			$table->string('pd_employment_petition_country', 250)->nullable();
			$table->string('pd_employment_petition_category', 250)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('contacts', function ($table) {
			$table->dropColumn('pd_family_petition_date');
			$table->dropColumn('pd_family_petition_country');
			$table->dropColumn('pd_family_petition_category');
			$table->dropColumn('pd_employment_date');
			$table->dropColumn('pd_employment_petition_country');
			$table->dropColumn('pd_employment_petition_category');
		});
	}

}
