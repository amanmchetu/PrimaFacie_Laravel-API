<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContact0816Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('contacts', function ($table) {
            $table->string('i94passport', 250)->nullable();
            $table->string('i94passport_country', 250)->nullable();
            $table->string('i94Number', 250)->nullable();
            $table->string('i94arrivalDate', 250)->nullable();
            $table->string('i94admitUntil', 250)->nullable();
            $table->string('i94classOfAdmission', 250)->nullable();
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
            $table->dropColumn('i94passport');
            $table->dropColumn('i94passport_country');
            $table->dropColumn('i94Number');
            $table->dropColumn('i94arrivalDate');
            $table->dropColumn('i94admitUntil');
            $table->dropColumn('i94classOfAdmission');
        });
	}

}
