<?php

class PrecticeAreasTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('prectice_areas')->delete();
        
		\DB::table('prectice_areas')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Immigration',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Michigan',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			2 => 
			array (
				'id' => '4',
				'name' => 'Illinois',
				'created_at' => '2016-08-27 16:02:04',
				'updated_at' => '2016-08-27 16:02:12',
			),
			3 => 
			array (
				'id' => '5',
				'name' => 'Cook County, IL',
				'created_at' => '2016-08-27 16:02:21',
				'updated_at' => '2016-08-27 16:02:23',
			),
		));
	}

}
