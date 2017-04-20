<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCases1Table extends Migration
{

    public function up()
    {
        Schema::table('cases', function ($table) {
            $table->string('area', 250)->after('case_type_id')->default("Primafacie")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cases', function ($table) {
            $table->dropColumn('area');
        });
    }

}
