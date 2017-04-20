<?php

class PaymentTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('payment_types')->delete();
        
		\DB::table('payment_types')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => 'Non-Refundable Minimum Retainer',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'Flat Fee',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'Retainer',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'Contingency',
				'created_at' => '2015-09-08 21:42:31',
				'updated_at' => '2015-09-08 21:42:31',
			),
		));
	}

}
