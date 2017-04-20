<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamilyMembersTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_members', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('first_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->string('middle_name', 250)->nullable();
            $table->string('date_of_birth', 250)->nullable();
            $table->string('place_of_birth_city', 250)->nullable();
            $table->string('place_of_birth_state', 250)->nullable();
            $table->string('place_of_birth_country', 250)->nullable();
            $table->string('place_of_residence_city', 250)->nullable();
            $table->string('place_of_residence_state', 250)->nullable();
            $table->string('place_of_residence_country', 250)->nullable();
            $table->string('relationship', 250)->nullable();
            $table->string('us_legal_status', 250)->nullable();
            $table->string('deceased', 250)->nullable();

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
        Schema::drop('family_members');
    }

}
