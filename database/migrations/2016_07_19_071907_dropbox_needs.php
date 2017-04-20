<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropboxNeeds extends Migration {

    public function up()
    {
        Schema::table('contacts', function ($table) {
            $table->longText('dropbox_folder')->nullable();
        });

        Schema::table('cases', function ($table) {
            $table->longText('dropbox_folder')->nullable();
        });
    }


    public function down()
    {
        Schema::table('contacts', function ($table) {
            $table->dropColumn('dropbox_folder');
        });

        Schema::table('cases', function ($table) {
            $table->dropColumn('dropbox_folder');
        });
    }
}
