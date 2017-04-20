<?php

class CaseStatusTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('case_status')->delete();
        
	}

}
