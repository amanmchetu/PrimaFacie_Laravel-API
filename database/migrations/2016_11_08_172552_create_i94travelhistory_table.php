<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateI94travelhistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('i94_travel_history', function(Blueprint $table)
        {
            $table->integer('id', true);
            $table->integer('contact_id');
            $table->string('arrivalDate',250);
            $table->string('portOfEntry',250);
            $table->string('departureDate',250);
            $table->string('portOfExit',250);
            $table->timestamps();
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop('i94_travel_history');
	}

}
