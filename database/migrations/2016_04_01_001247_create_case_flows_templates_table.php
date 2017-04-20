<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCaseFlowsTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('case_flows_templates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_type_id');
			$table->text('step');
			$table->string('purpose');
			$table->integer('priority');
			$table->integer('case_id');
			$table->integer('completed');
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
		Schema::drop('case_flows_templates');
	}

}
