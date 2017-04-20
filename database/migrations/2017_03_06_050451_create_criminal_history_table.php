<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCriminalHistoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('criminal_history', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('contact_id')->nullable();
            $table->string('date_of_arrest', 10)->nullable();
            $table->string('date_of_convinction', 10)->nullable();
            $table->string('district_court_name', 250)->nullable();
            $table->string('court_of_conviction', 250)->nullable();
            $table->string('statutory_name_of_conviction', 250)->nullable();
            $table->string('statutory_citation_of_conviction', 250)->nullable();
            $table->string('padilla_warnings_received_and_documented', 250)->nullable();
            $table->string('court_of_conviction_address', 250)->nullable();
            $table->string('court_of_conviction_phone', 250)->nullable();
            $table->string('court_of_conviction_email', 250)->nullable();
            $table->string('court_of_conviction_fax', 250)->nullable();
            $table->string('class_of_crime', 250)->nullable();
            $table->string('crime_of_moral_turpitude', 3)->nullable();
            $table->text('crime_of_moral_turpitude_explanation')->nullable();
            $table->string('aggravated_felony', 3)->nullable();
            $table->text('aggravated_felony_explanation')->nullable();
            $table->string('controlled_substance_crime', 3)->nullable();
            $table->text('controlled_substance_crime_explanation')->nullable();
            $table->string('crime_of_domestic_violence', 3)->nullable();
            $table->text('crime_of_domestic_violence_explanation')->nullable();
            $table->string('violation_of_personal_protection_order', 3)->nullable();
            $table->text('violation_of_personal_protection_order_explanation')->nullable();
            $table->string('other_immigration_consequences')->nullable();
            $table->text('result')->nullable();
            $table->string('sentence_terms_probation', 3)->nullable();
            $table->text('sentence_terms_probation_details')->nullable();
            $table->string('sentence_terms_fines', 3)->nullable();
            $table->text('sentence_terms_fines_details')->nullable();
            $table->string('sentence_terms_costs', 3)->nullable();
            $table->text('sentence_terms_costs_details')->nullable();
            $table->string('sentence_terms_restitution', 3)->nullable();
            $table->text('sentence_terms_restitution_details')->nullable();
            $table->string('sentence_terms_jail_prison', 3)->nullable();
            $table->text('sentence_terms_jail_prison_details')->nullable();
            $table->string('sentence_terms_other', 3)->nullable();
            $table->text('sentence_terms_other_details')->nullable();
            $table->string('represented_by_attorney', 3)->nullable();
            $table->string('attorney_name', 250)->nullable();
            $table->string('attorney_address', 250)->nullable();
            $table->string('attorney_phone', 250)->nullable();
            $table->string('removable_offense', 3)->nullable();
            $table->string('inadmissible_offense', 3)->nullable();
            $table->string('possible_waiver', 250)->nullable();

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
        Schema::drop('criminal_history');
	}

}
