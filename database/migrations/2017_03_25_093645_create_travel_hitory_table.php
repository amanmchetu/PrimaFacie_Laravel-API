<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTravelHitoryTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_history', function (Blueprint $table) {

            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('from', 250)->nullable();
            $table->string('to', 250)->nullable();
            $table->string('dur', 250)->nullable();
            $table->string('six_my', 250)->nullable();
            $table->string('six_mn', 250)->nullable();
            $table->string('countries', 250)->nullable();
            $table->string('purpose', 250)->nullable();
            $table->string('auth', 250)->nullable();
            $table->string('destination', 250)->nullable();
            $table->string('manner', 250)->nullable();
            $table->string('inyes', 250)->nullable();
            $table->string('inno', 250)->nullable();
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
        Schema::drop('travel_history');
    }

}
