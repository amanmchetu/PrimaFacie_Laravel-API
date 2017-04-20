<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('address', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 350)->nullable();
            $table->string('address', 350)->nullable();
            $table->string('line2', 350)->nullable();
            $table->string('apt', 3)->nullable();
            $table->string('ste', 3)->nullable();
            $table->string('flr', 3)->nullable();
            $table->string('apt_ste_flr_numbertxt', 20)->nullable();
            $table->string('isForeing', 3)->nullable();
            $table->string('isMailing', 3)->nullable();
            $table->string('isPrimary', 3)->nullable();
            $table->string('isCurrent', 3)->nullable();
            $table->string('liveFrom', 10)->nullable();
            $table->string('liveTo', 10)->nullable();
            $table->integer('order')->nullable();
            $table->integer('module')->nullable();
            $table->integer('object_id')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('zipCode')->nullable();
            $table->integer('clioId')->nullable();
            $table->timestamp('clio_sync_at')->nullable();
            $table->string('in_care_of', 50)->nullable();


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
        Schema::drop("address");
    }

}
