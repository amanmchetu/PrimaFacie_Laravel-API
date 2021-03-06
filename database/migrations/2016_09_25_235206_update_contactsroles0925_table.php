<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateContactsroles0925Table extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts_roles', function ($table) {


            $table->string('type', 50)->nullable();
            $table->string('match_to', 50)->nullable();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts_roles', function ($table) {
            $table->dropColumn('type');
            $table->dropColumn('match_to');
        });

    }

}
