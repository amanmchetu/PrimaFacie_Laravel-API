<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSubcontactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcontacts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('contact_id')->nullable();
			$table->string('first_name', 250)->nullable();
			$table->string('last_name', 250)->nullable();
			$table->string('email', 250)->nullable();
			$table->string('middle_name', 250)->nullable();
			$table->string('address', 250)->nullable();
			$table->string('city', 250)->nullable();
			$table->string('state', 250)->nullable();
			$table->string('country', 250)->nullable();
			$table->string('sex', 250)->nullable();
			$table->string('zip_code', 250)->nullable();
			$table->string('phone', 150)->nullable();
			$table->string('birth_date', 10)->nullable();
			$table->string('relationship', 250)->nullable();
			$table->timestamps();
			$table->string('others_names_used', 250)->nullable();
			$table->string('social_security_number', 250)->nullable();
			$table->string('alien_number', 250)->nullable();
			$table->string('pob_city', 250)->nullable();
			$table->string('pob_state', 250)->nullable();
			$table->string('pob_country', 250)->nullable();
			$table->string('marriage_date', 250)->nullable();
			$table->string('marriage_place', 250)->nullable();
			$table->string('spouse_first_name', 250)->nullable();
			$table->string('spouse_last_name', 250)->nullable();
			$table->string('spouse_dob', 250)->nullable();
			$table->string('spouse_place_of_birth', 250)->nullable();
			$table->string('spouse_social_security_number', 250)->nullable();
			$table->string('spouse_alien', 250)->nullable();
			$table->string('spouse_others_names', 250)->nullable();
			$table->string('i94', 250)->nullable();
			$table->string('passport_number', 250)->nullable();
			$table->string('passport_country', 250)->nullable();
			$table->string('current_immigration_status')->nullable();
			$table->string('marital_status')->nullable();
			$table->string('place_of_last_entry_to_us')->nullable();
			$table->string('date_of_last_entry_to_us')->nullable();
			$table->string('citizenship')->nullable();
			$table->string('in_care_of_address')->nullable();
			$table->string('address_apt_ck', 3)->nullable();
			$table->string('address_ste_ck', 3)->nullable();
			$table->string('address_floor_ck', 3)->nullable();
			$table->string('address_apt_ste_flr_numbertxt', 20)->nullable();
			$table->string('foreign_province', 250)->nullable();
			$table->string('foreign_postal_code', 250)->nullable();
			$table->string('mailing_in_care_of_address', 250)->nullable();
			$table->string('mailing_address', 250)->nullable();
			$table->string('mailing_address_apt_ck', 3)->nullable();
			$table->string('mailing_address_ste_ck', 3)->nullable();
			$table->string('mailing_address_floor_ck', 3)->nullable();
			$table->string('mailing_address_apt_ste_flr_numbertxt', 20)->nullable();
			$table->string('mailing_city', 250)->nullable();
			$table->string('mailing_state', 250)->nullable();
			$table->string('mailing_zip_code', 250)->nullable();
			$table->string('mailing_foreign_province', 250)->nullable();
			$table->string('mailing_foreign_postal_code', 250)->nullable();
			$table->string('mailing_country', 250)->nullable();
			$table->string('cr_exp', 250)->nullable();
			$table->string('lpr_exp', 250)->nullable();
			$table->string('marital_status_married', 3)->nullable();
			$table->string('marital_status_single', 3)->nullable();
			$table->string('marital_status_divorced', 3)->nullable();
			$table->string('marital_status_widow', 3)->nullable();
			$table->string('elis', 250)->nullable();
			$table->string('nvc_dos_case_num', 250)->nullable();
			$table->string('sex_male', 3)->nullable();
			$table->string('sex_female', 3)->nullable();
			$table->string('full_name', 250)->nullable();
			$table->string('phone1')->nullable();
			$table->integer('phone1_type_id')->nullable();
			$table->string('phone1_annotations')->nullable();
			$table->string('phone2')->nullable();
			$table->integer('phone2_type_id')->nullable();
			$table->string('phone2_annotations')->nullable();
			$table->string('phone3')->nullable();
			$table->integer('phone3_type_id')->nullable();
			$table->string('phone3_annotations')->nullable();
			$table->string('international_phone')->nullable();
			$table->integer('international_phone_type_id')->nullable();
			$table->string('international_phone_annotations')->nullable();
			$table->string('company_name', 250)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('subcontacts');
	}

}
