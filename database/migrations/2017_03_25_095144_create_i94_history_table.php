<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateI94HistoryTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i94_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('firstname', 250)->nullable();
            $table->string('middlename', 250)->nullable();
            $table->string('lastname', 250)->nullable();
            $table->string('number', 250)->nullable();
            $table->string('arrival', 250)->nullable();
            $table->string('admituntil', 250)->nullable();
            $table->string('class', 250)->nullable();
            $table->string('portenter', 250)->nullable();
            $table->string('portexit', 250)->nullable();
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
        Schema::drop('i94_history');
    }


}
