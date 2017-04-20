<?php

class PrimaModelsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('prima_models')->delete();
        
		\DB::table('prima_models')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'client_first_name',
				'table' => 'clients',
				'field' => 'first_name',
				'description' => 'The first name of the client',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'client_last_name',
				'table' => 'clients',
				'field' => 'last_name',
				'description' => 'The last name of the client',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'client_middle_name',
				'table' => 'clients',
				'field' => 'middle_name',
				'description' => 'The middle name of the cliet',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'attorney_last_name',
				'table' => 'users',
				'field' => 'last_name',
				'description' => 'The last name of the attorney',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			4 => 
			array (
				'id' => 5,
				'name' => 'attorney_first_name',
				'table' => 'users',
				'field' => 'first_name',
				'description' => 'The first name of the attorney',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
			5 => 
			array (
				'id' => 6,
				'name' => 'attorney_middle_name',
				'table' => 'users',
				'field' => 'middle_name',
				'description' => 'The middle name of the attorney',
				'created_at' => '2016-02-12 07:24:00',
				'updated_at' => '2016-02-12 07:24:00',
			),
		));
	}

}
