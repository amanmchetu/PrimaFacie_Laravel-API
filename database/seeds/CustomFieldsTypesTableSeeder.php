<?php

class CustomFieldsTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('custom_fields_types')->delete();
        
		\DB::table('custom_fields_types')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'CheckBox',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Text',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'ComboBox',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'DatePicker',
				'created_at' => '2015-09-29 17:50:20',
				'updated_at' => '2015-09-29 17:50:21',
			),
			array (
				'id' => 5,
				'name' => 'TextArea',
				'created_at' => '2015-09-29 17:50:20',
				'updated_at' => '2015-09-29 17:50:21',
			),
		));
	}

}
