<?php

class CaseTypesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('case_types')->delete();
        
		\DB::table('case_types')->insert(array (
			0 => 
			array (
				'id' => '1',
				'name' => ' I-130 Petition for Alien Relative ',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			1 => 
			array (
				'id' => '2',
				'name' => 'AR-11 Update Address With USCIS',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			2 => 
			array (
				'id' => '3',
				'name' => 'I-290B - Appeal of USCIS Decision',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			3 => 
			array (
				'id' => '4',
				'name' => 'I-90 Green Card Renewal',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			4 => 
			array (
				'id' => '5',
				'name' => 'I-102 Application to Replace Entry Document I-94',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			5 => 
			array (
				'id' => '6',
				'name' => 'G-639 FOIA with USCIS/CBP/NRC',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			6 => 
			array (
				'id' => '7',
				'name' => 'I-589 Asylum With USCIS',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			7 => 
			array (
				'id' => '8',
				'name' => 'I-751 Removal of Conditions on Residence',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			8 => 
			array (
				'id' => '9',
				'name' => 'I-881 NACARA Petition',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			9 => 
			array (
				'id' => '10',
				'name' => 'I-539 Application to Extend / Change Status',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			10 => 
			array (
				'id' => '11',
				'name' => 'I-824 Application for Action on Approved Petition',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			11 => 
			array (
				'id' => '12',
				'name' => 'DS-260 Consular Processing',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			12 => 
			array (
				'id' => '13',
				'name' => 'FBI Fingerprint Request',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			13 => 
			array (
				'id' => '14',
				'name' => 'EOIR-42A Immigration Court - Cancellation of Removal for LPRs',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			14 => 
			array (
				'id' => '15',
				'name' => 'EOIR-42B Immigration Court - Cancellation of Removal for Non-Permanent Residents',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			15 => 
			array (
				'id' => '16',
				'name' => 'I-918 U-Visa and Certification',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			16 => 
			array (
				'id' => '17',
				'name' => 'I-918 SuppB -- U-Visa Certification Only',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			17 => 
			array (
				'id' => '18',
				'name' => 'I-914 T-Visa',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			18 => 
			array (
				'id' => '19',
			'name' => 'I-821D (DACA) Deferred Action for Childhood Arrivals',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			19 => 
			array (
				'id' => '20',
			'name' => 'I-821 - Temporary Protected Status (TPS)',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			20 => 
			array (
				'id' => '21',
				'name' => 'I-601A Provisional Waiver',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			21 => 
			array (
				'id' => '22',
				'name' => 'I-212 Waiver',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			22 => 
			array (
				'id' => '23',
				'name' => 'I-360 VAWA PETITION',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			23 => 
			array (
				'id' => '24',
			'name' => 'I-360 Special Immigrant Juvenile Status (SIJS)',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			24 => 
			array (
				'id' => '25',
			'name' => 'I-601 Waiver (Post Consular Interview)',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			25 => 
			array (
				'id' => '26',
				'name' => 'I-485 Stand Alone Adjustment of Status',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			26 => 
			array (
				'id' => '27',
				'name' => 'Empty Case',
				'practice_area_id' => '2',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			27 => 
			array (
				'id' => '28',
				'name' => 'Imported from Clio',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			28 => 
			array (
				'id' => '29',
				'name' => 'I-589 Asylum/CAT/Withholding of Removal with Immigration Court',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			29 => 
			array (
				'id' => '30',
				'name' => 'I-246 Motion for Stay of Deportation with ICE',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			30 => 
			array (
				'id' => '31',
				'name' => 'Prosecutorial Discretion',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			31 => 
			array (
				'id' => '32',
				'name' => 'I-140 Petition for Alien Worker',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			32 => 
			array (
				'id' => '33',
				'name' => 'N-400 Application for US Citizenship',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			33 => 
			array (
				'id' => '34',
				'name' => 'N-600 Application for Citizenship Certificate',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			34 => 
			array (
				'id' => '35',
				'name' => 'N-565 Replacement of Citizenship Certificate',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			35 => 
			array (
				'id' => '36',
			'name' => 'I-130 & I-485 Adjustment of Status under INA 245(a) [Legal Entry]',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			36 => 
			array (
				'id' => '37',
				'name' => 'I-130 & I-485 & I-485 SuppA Adjustment under 245i [Petition filed prior to 4/30/2001]',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			37 => 
			array (
				'id' => '38',
				'name' => 'DS-160 Non-Immigrant Visa Applicaiton [Tourist Visa]',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			38 => 
			array (
				'id' => '39',
				'name' => 'I-360 : Generic Type',
				'practice_area_id' => '1',
				'created_at' => '2016-02-20 06:04:50',
				'updated_at' => '2016-02-20 06:04:50',
			),
			39 => 
			array (
				'id' => '40',
			'name' => 'I-765 Employment Authorization Document Renewal (EAD Renewal)',
				'practice_area_id' => '1',
				'created_at' => '2016-04-19 14:17:25',
				'updated_at' => '2016-04-19 14:17:25',
			),
			40 => 
			array (
				'id' => '42',
				'name' => 'Blank Case',
				'practice_area_id' => '1',
				'created_at' => '2016-05-02 20:59:00',
				'updated_at' => '2016-05-02 20:59:00',
			),
			41 => 
			array (
				'id' => '43',
				'name' => 'I-131 Application for Advance Parole Document',
				'practice_area_id' => '1',
				'created_at' => '2016-05-02 21:25:39',
				'updated_at' => '2016-05-02 21:25:39',
			),
			42 => 
			array (
				'id' => '46',
				'name' => 'Deleted Case Type',
				'practice_area_id' => '1',
				'created_at' => '2016-06-07 14:45:37',
				'updated_at' => '2016-06-07 14:45:39',
			),
			43 => 
			array (
				'id' => '47',
				'name' => 'Michigan Test Case',
				'practice_area_id' => '2',
				'created_at' => '2016-08-10 12:56:11',
				'updated_at' => '2016-08-10 12:56:11',
			),
			44 => 
			array (
				'id' => '48',
				'name' => 'Empty',
				'practice_area_id' => '3',
				'created_at' => '2016-08-14 21:34:21',
				'updated_at' => '2016-08-14 21:34:21',
			),
			45 => 
			array (
				'id' => '49',
				'name' => 'California Family Law / Dissolution / Legal Separation and Annulment',
				'practice_area_id' => '3',
				'created_at' => '2016-08-14 21:35:53',
				'updated_at' => '2016-08-14 21:35:53',
			),
			46 => 
			array (
				'id' => '50',
				'name' => 'Empty',
				'practice_area_id' => '4',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
			47 => 
			array (
				'id' => '51',
				'name' => 'Empty',
				'practice_area_id' => '5',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
