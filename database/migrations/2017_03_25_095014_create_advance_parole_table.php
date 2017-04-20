<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdvanceParoleTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advance_parole', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();

            $table->string('receiptnum', 250)->nullable();
            $table->string('receiptdate', 250)->nullable();
            $table->string('anum', 250)->nullable();
            $table->string('validfrom', 250)->nullable();
            $table->string('validuntil', 250)->nullable();
            $table->string('country', 250)->nullable();
            $table->string('othercountry', 250)->nullable();
            $table->string('under', 250)->nullable();
            $table->text('notes')->nullable();

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
        Schema::drop('advance_parole');
    }

}
