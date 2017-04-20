<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDucationalhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('educational_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();
            $table->string('school_name', 20)->nullable();
            $table->string('begin', 20)->nullable();
            $table->string('end', 20)->nullable();
            $table->string('graduation', 20)->nullable();
            $table->string('degree', 20)->nullable();
            $table->string('level', 20)->nullable();
            $table->string('street', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->integer('created_by')->nullable();
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
        Schema::drop('educational_history');
    }

}
