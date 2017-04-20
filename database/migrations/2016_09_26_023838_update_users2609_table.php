<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateUsers2609Table extends Migration {

    public function up()
    {
        Schema::table('users', function ($table) {


            $table->string('stripe_card_id', 50)->nullable();


        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('stripe_card_id');
        });

    }
}
