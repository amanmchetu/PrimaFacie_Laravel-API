<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMarriageHistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marriage_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('first_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->string('middle_name', 250)->nullable();
            $table->string('maiden_name', 250)->nullable();
            $table->string('date_marriage', 250)->nullable();
            $table->string('date_of_separation', 250)->nullable();
            $table->string('date_of_divorce', 250)->nullable();
            $table->string('date_of_death', 250)->nullable();
            $table->string('place_marriage_city', 250)->nullable();
            $table->string('place_marriage_state', 250)->nullable();
            $table->string('place_divorce_city', 250)->nullable();
            $table->string('place_divorce_state', 250)->nullable();
            $table->text('notes')->nullable();

            $table->timestamps();
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
        Schema::drop('marriage_history');
    }

}
