<?php

class TaskStatusTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('task_status')->delete();
        
		\DB::table('task_status')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Pending',
				'created_at' => '2015-12-11 21:17:22',
				'updated_at' => '2015-12-11 21:17:22',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Completed',
				'created_at' => '2015-12-11 21:17:22',
				'updated_at' => '2015-12-11 21:17:22',
			),
		));
	}

}
