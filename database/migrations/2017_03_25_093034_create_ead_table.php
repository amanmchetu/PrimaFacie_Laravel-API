<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEadTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ead', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('surname', 250)->nullable();
            $table->string('givenname', 250)->nullable();
            $table->string('anum', 250)->nullable();
            $table->string('cat', 250)->nullable();
            $table->string('cardnum', 250)->nullable();
            $table->string('cbirth', 250)->nullable();
            $table->text('tc')->nullable();
            $table->string('dob', 250)->nullable();
            $table->string('sex', 250)->nullable();
            $table->string('valid', 250)->nullable();
            $table->string('exp', 250)->nullable();
            $table->string('travel', 250)->nullable();
            $table->text('notes', 250)->nullable();

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
        Schema::drop('ead');
    }

}
