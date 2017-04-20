<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourtsTable180816 extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250)->nullable();
            $table->string('st_address', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('no_district', 250)->nullable();
            $table->string('no_circuit', 250)->nullable();
            $table->string('county', 250)->nullable();
            $table->string('mailing_add', 250)->nullable();
            $table->string('branch', 250)->nullable();
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
        Schema::drop('courts');
    }

}
