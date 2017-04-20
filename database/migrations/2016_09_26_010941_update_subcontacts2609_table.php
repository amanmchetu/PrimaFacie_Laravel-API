<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateSubcontacts2609Table extends Migration {

    public function up()
    {
        Schema::table('subcontacts', function ($table) {


            $table->string('migrated_to_id', 50)->nullable();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subcontacts', function ($table) {
            $table->dropColumn('migrated_to_id');
        });

    }

}
