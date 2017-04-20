<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateQuestionnairesTable extends Migration {

	public function up()
	{
		Schema::table('questionnaires', function ($table) {
			$table->softDeletes()->after('updated_at')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('questionnaires', function ($table) {
			$table->dropColumn('deleted_at');
		});
	}

}
