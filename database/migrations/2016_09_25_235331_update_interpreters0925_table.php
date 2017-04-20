<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateInterpreters0925Table extends Migration {

    public function up()
    {
        Schema::table('interpreters', function ($table) {


            $table->softDeletes()->nullable();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interpreters', function ($table) {
            $table->dropColumn('deleted_at');
        });

    }

}
