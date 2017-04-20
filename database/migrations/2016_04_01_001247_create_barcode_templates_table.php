<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBarcodeTemplatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barcode_templates', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('form_id')->nullable();
            $table->integer('page')->nullable();
            $table->string('pdf_field_barcode', 350)->nullable();
            $table->text('model')->nullable();
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
        Schema::drop('barcode_templates');
    }

}
