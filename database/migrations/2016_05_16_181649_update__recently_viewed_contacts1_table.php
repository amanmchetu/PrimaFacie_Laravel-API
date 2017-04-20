<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateRecentlyViewedContacts1Table extends Migration {

	public function up()
	{
		Schema::table('recently_viewed_contacts', function ($table) {
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
		Schema::table('recently_viewed_contacts', function ($table) {
			$table->dropColumn('deleted_at');
		});
	}

}
