<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProsecutorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('prosecutors', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('firm', 250)->nullable();
            $table->string('title_asst_chief', 250)->nullable();
            $table->string('p_number', 250)->nullable();
            $table->string('name', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->timestamps();
            $table->softDeletes()->nullable();
        });
    }

    /**
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('prosecutors');
    }

}
