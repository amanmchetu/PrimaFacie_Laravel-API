<?php

class CustomFieldsModulesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('custom_fields_modules')->delete();
        
		\DB::table('custom_fields_modules')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Contacts',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
		));
	}

}
