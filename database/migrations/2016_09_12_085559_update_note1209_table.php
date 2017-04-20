<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateNote1209Table extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('notes', function ($table) {
            $table->integer('clio_id')->nullable();
            $table->integer('clio_sycn_at')->nullable();
            $table->string('regarding_id', 50)->nullable();
            $table->string('regarding_type', 50)->nullable();
            $table->string('date', 50)->nullable();
            $table->string('clio_last_update', 50)->nullable();

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
            $table->dropColumn('clio_id');
            $table->dropColumn('clio_sycn_at');
            $table->dropColumn('regarding_id');
            $table->dropColumn('regarding_type');
            $table->dropColumn('date');
            $table->dropColumn('clio_last_update');
        });
    }

}
