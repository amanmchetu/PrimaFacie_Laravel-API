<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttorneysTable180816 extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attorneys', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('law_firm_name', 250)->nullable();
            $table->string('last_name', 250)->nullable();
            $table->string('first_name', 250)->nullable();
            $table->string('middle_name', 250)->nullable();
            $table->string('address', 250)->nullable();
            $table->string('address_apt_ck', 3)->nullable();
            $table->string('address_ste_ck', 3)->nullable();
            $table->string('address_floor_ck', 3)->nullable();
            $table->string('address_apt_ste_flr_numbertxt', 20)->nullable();
            $table->string('city', 250)->nullable();
            $table->string('state', 250)->nullable();
            $table->string('zip_code', 250)->nullable();
            $table->string('foreign_province', 250)->nullable();
            $table->string('foreign_postal_code', 250)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('fax', 250)->nullable();
            $table->string('email', 250)->nullable();
            $table->string('mobile_phone', 250)->nullable();
            $table->string('licensing_authority', 250)->nullable();
            $table->string('bar_number', 250)->nullable();
            $table->string('uscis_elis', 250)->nullable();
            $table->string('eoir', 250)->nullable();
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
        Schema::drop('attorneys');
    }

}
