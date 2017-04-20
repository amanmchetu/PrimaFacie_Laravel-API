<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateCasesTable180816 extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cases', function ($table) {
            $table->integer('attorney_id')->nullable();
            $table->string('attorney_type',25)->nullable();
            $table->integer('plantiff_id')->nullable();
            $table->string('plantiff_type',25)->nullable();
            $table->integer('filling_id')->nullable();
            $table->string('filling_type',25)->nullable();
            $table->integer('court_id')->nullable();
            $table->string('number', 150)->nullable();
            $table->string('matter_of', 150)->nullable();
            $table->string('filing_date', 150)->nullable();

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
            $table->dropColumn('court_id');
            $table->dropColumn('number');
            $table->dropColumn('matter_of');
            $table->dropColumn('filing_date');
        });
    }

}
