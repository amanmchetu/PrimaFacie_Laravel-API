<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuestionnairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('questionnaires', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('case_id');
			$table->integer('form_type_id')->nullable();
			$table->integer('role_id')->nullable()->default(0);
			$table->integer('contact_id')->nullable()->default(0);
			$table->string('contact_type', 45)->nullable()->default('0');
			$table->string('prefix', 45)->nullable()->default('0');
			$table->integer('role2_id')->nullable()->default(0);
			$table->integer('contact2_id')->nullable()->default(0);
			$table->string('contact2_type')->nullable()->default('0');
			$table->string('prefix2', 45)->nullable()->default('0');
			$table->integer('role3_id')->nullable()->default(0);
			$table->integer('contact3_id')->nullable()->default(0);
			$table->string('contact3_type', 45)->nullable()->default('0');
			$table->string('prefix3', 45)->nullable()->default('0');
			$table->integer('role4_id')->nullable()->default(0);
			$table->integer('contact4_id')->nullable()->default(0);
			$table->string('contact4_type', 45)->nullable()->default('0');
			$table->string('prefix4', 45)->nullable()->default('0');
			$table->integer('role5_id')->nullable()->default(0);
			$table->integer('contact5_id')->nullable()->default(0);
			$table->string('contact5_type', 45)->nullable()->default('0');
			$table->string('prefix5', 45)->nullable()->default('0');
			$table->integer('role6_id')->nullable()->default(0);
			$table->integer('contact6_id')->nullable()->default(0);
			$table->string('contact6_type', 45)->nullable()->default('0');
			$table->string('prefix6', 45)->nullable()->default('0');
			$table->integer('role7_id')->nullable()->default(0);
			$table->integer('contact7_id')->nullable()->default(0);
			$table->string('contact7_type', 45)->nullable()->default('0');
			$table->string('prefix7', 45)->nullable()->default('0');
			$table->integer('role8_id')->nullable()->default(0);
			$table->integer('contact8_id')->nullable()->default(0);
			$table->string('contact8_type', 45)->nullable()->default('0');
			$table->string('prefix8', 45)->nullable()->default('0');
			$table->integer('template_id')->nullable()->default(0);
			$table->integer('status_id')->nullable()->default(0);
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
		Schema::drop('questionnaires');
	}

}
