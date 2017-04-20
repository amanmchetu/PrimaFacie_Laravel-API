<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCases1309Table extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cases', function ($table) {

            $table->string('clio_last_update', 50)->nullable();
            $table->string('defendant_type', 50)->nullable();
            $table->integer('defendant_id')->nullable();
            $table->integer('judge_id')->nullable();
            $table->integer('plantiff_client')->nullable();
            $table->integer('defendant_client')->nullable();
            $table->integer('prosecutor_id')->nullable();
            $table->integer('fcourt_id')->nullable();

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
            $table->dropColumn('clio_last_update');
            $table->dropColumn('defendant_type');
            $table->dropColumn('defendant_id');
            $table->dropColumn('judge_id');
            $table->dropColumn('defendant_client');
            $table->dropColumn('prosecutor_id');
            $table->dropColumn('fcourt_id');
            $table->dropColumn('filling_id');
            $table->dropColumn('filling_type');
        });

    }

}
