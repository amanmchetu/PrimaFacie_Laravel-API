<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContacts2810Table extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::table('contacts', function ($table) {

            $table->string('occupation', 500)->nullable();
            $table->string('salutation', 50)->nullable();
            $table->string('driver_licence', 250)->nullable();
            $table->string('nationality', 250)->nullable();
            $table->string('clan_tribe_name', 250)->nullable();
            $table->string('native_lang_name', 250)->nullable();
            $table->string('active', 250)->nullable();

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
            $table->dropColumn('occupation');
            $table->dropColumn('salutation');
            $table->dropColumn('driver_licence');
            $table->dropColumn('nationality');
            $table->dropColumn('clan_tribe_name');
            $table->dropColumn('native_lang_name');
            $table->dropColumn('active');
        });
	}

}
