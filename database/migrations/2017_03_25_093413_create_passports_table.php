<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePassportsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('passports', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('givenname', 250)->nullable();
            $table->string('lastname', 250)->nullable();
            $table->string('marriedname', 250)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('poi', 250)->nullable();
            $table->string('doi', 250)->nullable();
            $table->string('doe', 250)->nullable();
            $table->string('ppn', 250)->nullable();
            $table->string('natid', 250)->nullable();
            $table->string('dob', 250)->nullable();
            $table->string('sob', 250)->nullable();
            $table->string('cob', 250)->nullable();
            $table->string('sex', 250)->nullable();
            $table->string('other1', 250)->nullable();
            $table->string('other2', 250)->nullable();
            $table->string('other3', 250)->nullable();
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
        Schema::drop('passports');
    }

}
