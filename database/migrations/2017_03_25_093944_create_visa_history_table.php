<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisaHistoryTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visa_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('first', 250)->nullable();
            $table->string('last', 250)->nullable();
            $table->string('cat', 250)->nullable();
            $table->string('number', 250)->nullable();
            $table->string('issue', 250)->nullable();
            $table->string('exp', 250)->nullable();
            $table->string('poissue', 250)->nullable();
            $table->text('notes')->nullable();
            $table->string('dosnum', 250)->nullable();
            $table->string('anumber', 250)->nullable();
            $table->string('renew5', 250)->nullable();
            $table->string('renew4', 250)->nullable();
            $table->string('renew3', 250)->nullable();
            $table->string('renew2', 250)->nullable();
            $table->string('renew1', 250)->nullable();
            $table->string('expwarn', 250)->nullable();

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
        Schema::drop('visa_history');
    }


}
