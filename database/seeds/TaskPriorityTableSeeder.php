<?php

class TaskPriorityTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('task_priority')->delete();
        
		\DB::table('task_priority')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Emergency',
				'color' => NULL,
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'High',
				'color' => NULL,
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Medium',
				'color' => NULL,
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Low',
				'color' => NULL,
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
		));
	}

}
