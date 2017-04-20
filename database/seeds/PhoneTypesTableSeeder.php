<?php

class PhoneTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('phone_types')->delete();
        
		\DB::table('phone_types')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Home',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Work',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Cell',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
		));
	}

}
