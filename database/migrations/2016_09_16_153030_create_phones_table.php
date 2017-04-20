<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration
{

    public function up()
    {
        Schema::create('phones', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 250)->nullable();
            $table->string('number', 250)->nullable();
            $table->string('annotation', 500)->nullable();
            $table->string('available_at', 250)->nullable();
            $table->integer('object_id')->nullable();
            $table->integer('module')->nullable();
            $table->integer('clio_id')->nullable();
            $table->string('clio_sync_at', 250)->nullable();
            $table->string('clio_last_update', 250)->nullable();
            $table->string('type', 250)->nullable();
            $table->string('active_type', 250)->nullable();
            $table->string('country_area_code', 250)->nullable();
            $table->string('ext', 250)->nullable();
            $table->string('iswork', 3)->nullable();
            $table->string('ishome', 3)->nullable();
            $table->string('ismobile', 3)->nullable();
            $table->string('isfax', 3)->nullable();
            $table->string('ispager', 3)->nullable();
            $table->string('isskype', 3)->nullable();
            $table->string('isother', 3)->nullable();

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
        Schema::drop('phones');
    }

}
