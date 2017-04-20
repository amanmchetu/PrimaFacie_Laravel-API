<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNotes2811Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('notes', function ($table) {
            DB::statement("SET SESSION sql_mode = '';");
            DB::statement("ALTER TABLE notes CHANGE COLUMN body body longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL;");
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('notes', function ($table) {
            DB::statement("SET SESSION sql_mode = '';");
            DB::statement("ALTER TABLE notes CHANGE COLUMN body body text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL;");
        });
	}

}
