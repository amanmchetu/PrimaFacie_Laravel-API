<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('middle_name')->nullable();
			$table->string('email');
			$table->string('phone');
			$table->string('mobile_phone');
			$table->string('fax')->nullable();
			$table->string('address');
			$table->string('city');
			$table->string('state');
			$table->string('zip_code');
			$table->string('password', 60);
			$table->string('password_temp', 60);
			$table->string('code', 60);
			$table->string('remember_token', 60);
			$table->integer('active');
			$table->integer('role_id');
			$table->timestamps();
			$table->string('licensing_authority', 250)->nullable();
			$table->string('bar_number', 250)->nullable();
			$table->string('law_firm_name', 250)->nullable();
			$table->string('country');
			$table->boolean('stripe_active')->default(0);
			$table->string('stripe_id')->nullable();
			$table->string('stripe_subscription')->nullable();
			$table->string('stripe_plan', 25)->nullable();
			$table->string('last_four', 4)->nullable();
			$table->dateTime('trial_ends_at')->nullable();
			$table->dateTime('subscription_ends_at')->nullable();
			$table->integer('is_attorney')->nullable()->default(1);
			$table->string('address_apt_ck', 3)->nullable();
			$table->string('address_ste_ck', 3)->nullable();
			$table->string('address_floor_ck', 3)->nullable();
			$table->string('address_apt_ste_flr_numbertxt', 3)->nullable();
			$table->string('foreign_province')->nullable();
			$table->string('foreign_postal_code')->nullable();
			$table->string('uscis_elis')->nullable();
			$table->string('eoir')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
