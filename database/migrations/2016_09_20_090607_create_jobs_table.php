<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();
            $table->string('job', 250)->nullable();
            $table->string('begin', 20)->nullable();
            $table->string('end', 20)->nullable();
            $table->string('company', 250)->nullable();
            $table->string('street', 250)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('zip', 250)->nullable();
            $table->string('duties', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('supervisor', 250)->nullable();
            $table->string('money_week', 250)->nullable();
            $table->string('money_month', 250)->nullable();
            $table->string('money_year', 250)->nullable();
            $table->string('title', 250)->nullable();
            $table->string('country', 250)->nullable();
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
        Schema::drop('jobs');
    }

}
