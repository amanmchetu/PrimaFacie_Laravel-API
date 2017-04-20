<?php

class CustomFieldsValuesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('custom_fields_values')->delete();
        
	}

}
