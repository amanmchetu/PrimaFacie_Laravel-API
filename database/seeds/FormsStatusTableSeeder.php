<?php

class FormsStatusTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('forms_status')->delete();
        
		\DB::table('forms_status')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Draft',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Done',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
		));
	}

}
