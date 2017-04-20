<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaseFlowsCustomTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_flows_custom', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_type_id');
			$table->text('step');
			$table->string('purpose');
			$table->integer('priority');
			$table->integer('case_id');
			$table->integer('completed');
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
		Schema::drop('case_flows_custom');
	}

}
