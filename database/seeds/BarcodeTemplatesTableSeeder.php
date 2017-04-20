<?php

class BarcodeTemplatesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('barcode_templates')->delete();
        
		\DB::table('barcode_templates')->insert(array (
			0 => 
			array (
				'id' => '1',
				'form_id' => '1',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'G-28|03/04/15|1|{form1[0].#subform[0].#area[0].P1_L1_ELISAcctNumber[0]}|{form1[0].#subform[0].Line2b_GivenName[0]}|{form1[0].#subform[0].Line2a_FamilyName[0]}|&ifEqual({form1[0].#subform[0].Line2c_MiddleName[0]}:N/A,,{form1[0].#subform[0].Line2c_MiddleName[0]})|{form1[0].#subform[0].Line3a_StreetNumber[0]}+&checkBoxGroup({form1[0].#subform[0].Line3b_Unit[2]}:APT,{form1[0].#subform[0].Line3b_Unit[0]}:STE,{form1[0].#subform[0].Line3b_Unit[1]}:FLR)+{form1[0].#subform[0].Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[0].Line3c_CityOrTown[0]}|{form1[0].#subform[0].Line3e_ZipCode[0]}|{form1[0].#subform[0].Line3f_Province[0]}|{form1[0].#subform[0].Line3g_PostalCode[0]}|{form1[0].#subform[0].Line3h_Country[0]}|{form1[0].#subform[0].Line4_DaytimeTelephoneNumber[0]}|{form1[0].#subform[0].Line5_FaxPhoneNumber[0]}|{form1[0].#subform[0].Line6_EMail[0]}|{form1[0].#subform[0].Line7_MobileTelephoneNumber[0]}|&ifEqual({form1[0].#subform[0].Line1a_USCIS[0]}:on,Y,)|{form1[0].#subform[0].Line1b_ListFormNumber[0]}|&ifEqual({form1[0].#subform[0].Line2a_ICE[0]}:on,Y,)|{form1[0].#subform[0].Line2b_ListMatter[0]}|&ifEqual({form1[0].#subform[0].Line3a_CBP[0]}:on,Y,)|{{form1[0].#subform[0].Line3b_ListSpecificMatter[0]}|&checkBoxGroup({form1[0].#subform[0].Line4_Checkbox[0]}:A, {form1[0].#subform[0].Line4_Checkbox[3]}:R,{form1[0].#subform[0].Line4_Checkbox[2]}:P,{form1[0].#subform[0].Line4_Checkbox[1]}:B)|{form1[0].#subform[0].Line5b_GivenName[0]}|{form1[0].#subform[0].Line5a_FamilyName[0]}|&ifEqual({form1[0].#subform[0].Line5c_MiddleName[0]}:N/A,,{form1[0].#subform[0].Line5c_MiddleName[0]})|{form1[0].#subform[0].Line6_NameOfCompany[0]}',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			1 => 
			array (
				'id' => '2',
				'form_id' => '1',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode2[0]',
			'model' => 'G-28|03/04/15|2|{form1[0].#subform[1].#area[1].P2_L7_ELISAcctNumber[0]}|{form1[0].#subform[1].Line8_ReceiptNumber[0]}|{form1[0].#subform[1].Line9_DaytimeTelephoneNumber[0]}|{form1[0].#subform[1].Line10_MobileTelephoneNumber[0]}|{form1[0].#subform[1].Line11_EMail[0]}|{form1[0].#subform[1].Line12a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].Line12b_Unit[2]}:APT, {form1[0].#subform[1].Line12b_Unit[0]}:STE, {form1[0].#subform[1].Line12b_Unit[1]}:FLR )+{form1[0].#subform[1].Line12b_AptSteFlrNumber[0]}|{form1[0].#subform[1].Line12c_CityOrTown[0]}|{form1[0].#subform[1].Line12d_State[0]}|{form1[0].#subform[1].Line12e_ZipCode[0]}|{form1[0].#subform[1].Line12f_Province[0]}|{form1[0].#subform[1].Line12g_PostalCode[0]}|{form1[0].#subform[1].Line12h_Country[0]}|&ifEqual({form1[0].#subform[1].CheckBox1[0]}:on, Y, )|{form1[0].#subform[1].Line1a_LicensingAuthority[0]}|{form1[0].#subform[1].Line1a_LicensingAuthority[0]}|{form1[0].#subform[1].Line1c_NameofLawFirm[0]}|&ifEqual({form1[0].#subform[1].Checkbox1dAmNot[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Checkbox1dAm[0]}:on, Y, )|{form1[0].#subform[1].Line1d_Explanation[0]}|&ifEqual({form1[0].#subform[1].CheckBox2[0]}:on, Y, )|{form1[0].#subform[1].Line2b_NameofOrganization[0]}|{form1[0].#subform[1].Line2c_DateExpires[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			2 => 
			array (
				'id' => '3',
				'form_id' => '1',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode3[0]',
			'model' => 'G-28|03/04/15|3|&ifEqual({}:on, Y, )|&ifEqual({checkbox_pdf_field_name}:on, Y, )|{form1[0].#subform[2].Line3_NameofAttorneyOrRep[0]}|&ifEqual({form1[0].#subform[2].CheckBox4[0]}:on, Y, )|{form1[0].#subform[2].Line4b_LawStudent[0]}|&ifEqual({form1[0].#subform[2].CheckBox2a[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].CheckBox2b[0]}:on, Y, )|{form1[0].#subform[2].Line3b_Date[0]}|{form1[0].#subform[2].Line3_Date[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			3 => 
			array (
				'id' => '4',
				'form_id' => '1',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode3[1]',
				'model' => 'G-28|03/04/15|4|{form1[0].#subform[3].Line1_Explanation[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			4 => 
			array (
				'id' => '5',
				'form_id' => '33',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-821|02/20/14|1|&ifEqual({form1[0].#subform[0].P1_checkbox1a_initial[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_checkbox1b_re-registration[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_checkbox2a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_checkbox2b_No[0]}:on, y, )|{form1[0].#subform[0].P2_Line1a_FamilyName[0]}|{form1[0].#subform[0].P2_Line1b_GivenName[0]}|{form1[0].#subform[0].P2_Line1c_MiddleName[0]}|{form1[0].#subform[0].P2_Line2a_InCareofName[0]}|{form1[0].#subform[0].P2_Line2b_StreetNumberName[0]}+&checkBoxGroup({form1[0].#subform[0].P2_Line2c_Unit[0]}: APT, {form1[0].#subform[0].P2_Line2c_Unit[1]}: STE, {form1[0].#subform[0].P2_Line2c_Unit[2]}: FLR) + {form1[0].#subform[0].P2_Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[0].P2_Line2d_CityOrTown[0]}|{form1[0].#subform[0].P2_Line2e_State[0]}|{form1[0].#subform[0].p2_Line2f_ZipCode[0]}|&ifEqual({form1[0].#subform[0].P2_checkbox2g_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P2_checkbox2g_No[0]}:on, y, )|{form1[0].#subform[0].P2_Line3a_StreetAddress[0]}+&checkBoxGroup({form1[0].#subform[0].P2_Line3b_Unit[0]}: APT, {form1[0].#subform[0].P2_Line3b_Unit[1]}: STE, {form1[0].#subform[0].P2_Line3b_Unit[2]}: FLR)+{form1[0].#subform[0].P2_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[0].P2_Line3c_CityOrTown[0}|{form1[0].#subform[0].P2_Line3d_State[0]}|{form1[0].#subform[0].P2_Line3e_ZipCode[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			5 => 
			array (
				'id' => '6',
				'form_id' => '33',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode2[0]',
			'model' => 'I-821|02/20/2014|2|{form1[0].#subform[1].#area[0].P2_Line4_AlienNumber[0]}|{form1[0].#subform[1].#area[1].P2_Line5_AcctIdentifier[0]}|{form1[0].#subform[1].P2_Line6_SocialSecurityNumber[0]}|{form1[0].#subform[1].P2_Line7_DateOfBirth[0]}|&ifEqual({form1[0].#subform[1].P2_Line7_Gender_Male[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line7_Gender_Female[0]}:on, y, )|{form1[0].#subform[1].P2_Line9_CityTownOfBirth[0]}|{form1[0].#subform[1].P2_Line10_CountryOfBirth[0]}|{form1[0].#subform[1].P2_Line11_CountryOfResidence[0]}|{form1[0].#subform[1].P2_Line12_CountryofCitizenship[0]}|&ifEqual({form1[0].#subform[1].P2_Line13_MaritalStatus_Married[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line13_MaritalStatus_Widowed[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line13_MaritalStatus_Single[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line13_MaritalStatus_Divorced[0]}:on, y, )|{form1[0].#subform[1].P2_Line14a_FamilyName[0]}|{form1[0].#subform[1].P2_Line14b_GivenName[0]}|{form1[0].#subform[1].P2_Line14c_MiddleName[0]}|{form1[0].#subform[1].P2_Line15a_DateofBirth[0]}|{form1[0].#subform[1].P2_Line15b_DateofBirth[0]}|&ifEqual({form1[0].#subform[1].P2_Line16_Ethnicity_Hispanic[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line16_Ethnicity_NoHis[0]}:on, y, )|&ifEqual({form1[0].#subform[1].P2_Line17_Race_White[0]}:on, W,U)|&ifEqual({form1[0].#subform[1].P2_Line17_Race_Asian[0]}:on, A,U)|&ifEqual({form1[0].#subform[1].P2_Line17_Race_Black[0]}:on, B,U)|&ifEqual({form1[0].#subform[1].P2_Line17_Race_Indian[0]}:on, I,U)|&ifEqual({form1[0].#subform[1].P2_Line17_Race_Hawaiian[0]}:on, A,U)|{form1[0].#subform[1].P2_Line18_Height_Feet[0]}|{form1[0].#subform[1].P2_Line18_Height_Inches[0]}|{form1[0].#subform[1].P2_Line19_Pound1[0]}+{form1[0].#subform[1].P2_Line19_Pound2[0]}+{form1[0].#subform[1].P2_Line19_Pound3[0]}|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Black[0]}:on, BLK,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Blue[0]}:on, BLU,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Brown[0]}:on, BRO,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Gray[0]}:on, GRY,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Green[0]}:on, GRN,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Hazel[0]}:on, HAZ,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Maroon[0]}:on, MAR,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Pink[0]}:on, PNK,XXX)|&ifEqual({form1[0].#subform[1].P2_Line20_Eye_Other[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			6 => 
			array (
				'id' => '7',
				'form_id' => '33',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode3[0]',
			'model' => 'I-821|02/20/14|3|{form1[0].#subform[2].#area[4].P2_Line25a_ArrivalDeparture[0]}|{form1[0].#subform[2].P2_Line25b_DateExpired[0]}|{form1[0].#subform[2].P2_Line25c_PassportNumber[0]}|{form1[0].#subform[2].P2_Line25d_TravelDoc[0]}|{form1[0].#subform[2].P2_Line25e_CountryOfIssuance[0]}|{form1[0].#subform[2].P2_Line25f_ExpDate[0]}|{form1[0].#subform[2].P2_Line26_CurrentStatus[0]}|&ifEqual({form1[0].#subform[2].P2_checkbox27_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[2].P2_checkbox27_No[0]}:on, y, )|&ifEqual({form1[0].#subform[2].P2_checkbox28a_Proceeding_exclusion[0]}:on, A, )|&ifEqual({form1[0].#subform[2].P2_checkbox28b_Proceeding_removal[0]}:on, B, )|&ifEqual({form1[0].#subform[2].P2_checkbox28c_Proceeding_recission[0]}:on, C, )|&ifEqual({form1[0].#subform[2].P2_checkbox28d_Proceeding_other[0]}:on, D, )|{form1[0].#subform[2].P2_Line29_LocationofProceedings[0]}|{form1[0].#subform[2].P2_Line30_DateofProceedingsFrom[0]}|{form1[0].#subform[2].P2_Line30_DateofProceedingsTo[0]}|{form1[0].#subform[2].#area[2].P3_Line1_AcctIdentifier[0]}|{form1[0].#subform[2].#area[3].P3_Line2_AlienNumber[0]}|{form1[0].#subform[2].P3_Line3a_FamilyName[0]}|{form1[0].#subform[2].P3_Line3b_GivenName[0]}|{form1[0].#subform[2].P3_Line3c_MiddleName[0]}|{form1[0].#subform[2].P3_Line4a_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[2].P3_Line4b_Unit[2]}:APT, {form1[0].#subform[2].P3_Line4b_Unit[0]}:STE, {form1[0].#subform[2].P3_Line4b_Unit[1]}:FLR )+{form1[0].#subform[2].P3_Line4b_AptSteFlrNumber[0]}|{form1[0].#subform[2].P3_Line4c_CityOrTown[0]}|{form1[0].#subform[2].P3_Line4d_State[0]}|{form1[0].#subform[2].P3_Line4e_ZipCode[0]}|{form1[0].#subform[2].P3_Line4g_Province[0]}|{form1[0].#subform[2].P3_Line4f_PostalCode[0]}|{form1[0].#subform[2].P3_Line4h_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			7 => 
			array (
				'id' => '8',
				'form_id' => '33',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode4[0]',
			'model' => 'I-821|02/20/14|4|{form1[0].#subform[3].P3_Line5_SpouseBirthDate[0]}|{form1[0].#subform[3].P3_Line6_DateofPresentMarriage[0]}|{form1[0].#subform[3].P3_Line7_PlaceofPresentMarriage[0]}|{form1[0].#subform[3].#area[5].P3_Line8a_ELISNumber[0]}|{form1[0].#subform[3].#area[6].P3_Line8b_AlienNumber[0]}|{form1[0].#subform[3].P3_Line8c_FamilyName[0]}|{form1[0].#subform[3].P3_Line8d_GivenName[0]}|{form1[0].#subform[3].P3_Line8e_MiddleName[0]}|{form1[0].#subform[3].P3_Line8e_MiddleName[0]}|{form1[0].#subform[3].P3_Line8g_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[3].P3_checkbox8h_Unit[2]}:APT, {form1[0].#subform[3].P3_checkbox8h_Unit[0]}:STE, {form1[0].#subform[3].P3_checkbox8h_Unit[1]}:FLR )+{form1[0].#subform[3].P3_Line8h_AptSteFlrNumber[0]}|{form1[0].#subform[3].P3_Line8i_CityOrTown[0]}|{form1[0].#subform[3].P3_Line8j_State[0]}|{form1[0].#subform[3].P3_Line8k_ZipCode[0]}|{form1[0].#subform[3].P3_Line8m_PostalCode[0]}|{form1[0].#subform[3].P3_Line8l_Province[0]}|{form1[0].#subform[3].P3_Line8n_Country[0]}|{form1[0].#subform[3].#area[9].P3_Line9a_ELISNumber[0]}|{form1[0].#subform[3].#area[10].P3_Line9b_AlienNumber[0]}|{form1[0].#subform[3].P3_Line9c_FamilyName[0]}|{form1[0].#subform[3].P3_Line9d_GivenName[0]}|{form1[0].#subform[3].P3_Line9e_MiddleName[0]}|{form1[0].#subform[3].P3_Line9f_DateOfBirth[0]}|{form1[0].#subform[3].P3_Line9g_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[3].P3_checkbox9h_Unit[2]}:APT, {form1[0].#subform[3].P3_checkbox9h_Unit[0]}:STE, {form1[0].#subform[3].P3_checkbox9h_Unit[1]}:FLR )+{form1[0].#subform[3].P3_Line9h_AptSteFlrNumber[0]}|{form1[0].#subform[3].P3_Line9i_CityOrTown[0]}|{form1[0].#subform[3].P3_Line9j_State[0]}|{form1[0].#subform[3].P3_Line9k_ZipCode[0]}|{form1[0].#subform[3].P3_Line9m_PostalCode[0]}|{form1[0].#subform[3].P3_Line9l_Province[0]}|{form1[0].#subform[3].P3_Line9n_Country[0]}|{form1[0].#subform[3].#area[7].P3_Line10a_ELISNumber[0]}|{form1[0].#subform[3].#area[8].P3_Line10b_AlienNumber[0]}|{form1[0].#subform[3].P3_Line10c_FamilyName[0]}|{form1[0].#subform[3].P3_Line10d_GivenName[0]}|{form1[0].#subform[3].P3_Line10e_MiddleName[0]}|{form1[0].#subform[3].P3_Line10f_DateOfBirth[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			8 => 
			array (
				'id' => '9',
				'form_id' => '33',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode5[0]',
			'model' => 'I-821|02/20/14|5|{form1[0].#subform[4].P3_Line10g_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[4].P3_Line10g_StreetNumberName[0]}:APT, {form1[0].#subform[4].P3_checkbox10h_Unit[0]}:STE, {form1[0].#subform[4].P3_checkbox10h_Unit[1]}:FLR )+{form1[0].#subform[4].P3_Line10h_AptSteFlrNumber[0]}|{form1[0].#subform[4].P3_Line10i_CityOrTown[0]}|{form1[0].#subform[4].P3_Line10j_State[0]}|{form1[0].#subform[4].P3_Line10k_ZipCode[0]}|{form1[0].#subform[4].P3_Line10m_PostalCode[0]}|{form1[0].#subform[4].P3_Line10l_Province[0]}|{form1[0].#subform[4].P3_Line10n_Country[0]}|{form1[0].#subform[4].#area[11].P3_Line11a_ELISNumber[0]}|{form1[0].#subform[4].#area[12].P3_Line11b_AlienNumber[0]}|{form1[0].#subform[4].P3_Line11c_FamilyName[0]}|{form1[0].#subform[4].P3_Line11d_GivenName[0]}|{form1[0].#subform[4].P3_Line11e_MiddleName[0]}|{form1[0].#subform[4].P3_Line11f_DateOfBirth[0]}|{form1[0].#subform[4].P3_Line11g_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[4].P3_checkbox11h_Unit[2]}:APT, {form1[0].#subform[4].P3_checkbox11h_Unit[0]}:STE, {form1[0].#subform[4].P3_checkbox11h_Unit[1]}:FLR )+{form1[0].#subform[4].P3_Line11h_AptSteFlrNumber[0]}|{form1[0].#subform[4].P3_Line11i_CityOrTown[0]}|{form1[0].#subform[4].P3_Line11j_State[0]}|{form1[0].#subform[4].P3_Line11k_ZipCode[0]}|{form1[0].#subform[4].P3_Line11m_PostalCode[0]}|{form1[0].#subform[4].P3_Line11l_Province[0]}|{form1[0].#subform[4].P3_Line11n_Country[0]}|{form1[0].#subform[4].#area[13].P3_Line12a_ELISNumber[0]}|{form1[0].#subform[4].#area[14].P3_Line12b_AlienNumber[0]}|{form1[0].#subform[4].P3_Line12c_FamilyName[0]}|{form1[0].#subform[4].P3_Line12d_GivenName[0]}|{form1[0].#subform[4].P3_Line12e_MiddleName[0]}|{form1[0].#subform[4].P3_Line12f_DateOfBirth[0]}|{form1[0].#subform[4].P3_Line12g_StreetNumberName[0]}| &checkBoxGroup({form1[0].#subform[4].P3_checkbox12h_Unit[2]}:APT, {form1[0].#subform[4].P3_checkbox12h_Unit[0]}:STE, {form1[0].#subform[4].P3_checkbox12h_Unit[1]}:FLR )+{form1[0].#subform[4].P3_Line12h_AptSteFlrNumber[0]}|{form1[0].#subform[4].P3_Line12i_CityOrTown[0]}|{form1[0].#subform[4].P3_Line12j_State[0]}|{form1[0].#subform[4].P3_Line12k_ZipCode[0]}|{form1[0].#subform[4].P3_Line12m_PostalCode[0]}|{form1[0].#subform[4].P3_Line12l_Province[0]}|{form1[0].#subform[4].P3_Line12n_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			9 => 
			array (
				'id' => '10',
				'form_id' => '33',
				'page' => '6',
				'pdf_field_barcode' => 'form1[0].#subform[5].PaperFormsBarcode6[0]',
			'model' => 'I-821|02/20/14|6|{form1[0].#subform[5].P4_Line1a_NationalofCountry[0]}|{form1[0].#subform[5].P4_Line1b_DateEnteredUS[0]}|&ifEqual({form1[0].#subform[5].P4_checkbox1c_Yes[0]}:on, y, )|{form1[0].#subform[5].P4_Line1d_CountryofResidence[0]}|{form1[0].#subform[5].P4_Line1e_DateEnteredUSFrom[0]}|{form1[0].#subform[5].P4_Line1e_DateEnteredUSTo[0]}|{form1[0].#subform[5].P4_Line1f_ImmigrationStatus[0]}|&ifEqual({form1[0].#subform[5].P4_checkbox2a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox2b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox2c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox3a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox3b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox3c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox4a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox4b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox4c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[5].P4_checkbox5a_Yes[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			10 => 
			array (
				'id' => '11',
				'form_id' => '33',
				'page' => '7',
				'pdf_field_barcode' => 'form1[0].#subform[6].PaperFormsBarcode7[0]',
			'model' => 'I-821|02/20/14|7|&ifEqual({form1[0].#subform[6].P4_checkbox5b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox5c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox5d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox5e_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox5f_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox6a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox6b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox6c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox6d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox7a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox7b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox7c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox7d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox8a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox8b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox9_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox10a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox10b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox10c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox11_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[6].P4_checkbox12a_Yes[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			11 => 
			array (
				'id' => '12',
				'form_id' => '33',
				'page' => '8',
				'pdf_field_barcode' => 'form1[0].#subform[7].PaperFormsBarcode8[0]',
			'model' => 'I-821|02/20/14|8|&ifEqual({form1[0].#subform[7].P4_checkbox12b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox12c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox12d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox12d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox12f_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox13_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox14a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox14a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox14b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox14c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox15_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox16_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox17_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox18_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox19_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox20_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox21a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox21b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox21c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox21d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox21e_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox22a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[7].P4_checkbox22b_Yes[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			12 => 
			array (
				'id' => '13',
				'form_id' => '33',
				'page' => '9',
				'pdf_field_barcode' => 'form1[0].#subform[8].PaperFormsBarcode9[0]',
			'model' => 'I-821|02/20/14|9|&ifEqual({form1[0].#subform[8].P4_checkbox23_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox24_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox25_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox26_Yes[0]}:on, y, )|&ifEqual({}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox27_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox28a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox28b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox29a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox29b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox29c_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox29d_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox29e_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox30a_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox30b_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox31_Yes[0]}:on, y, )|&ifEqual({form1[0].#subform[8].P4_checkbox32_Yes[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			13 => 
			array (
				'id' => '14',
				'form_id' => '33',
				'page' => '10',
				'pdf_field_barcode' => 'form1[0].#subform[9].PaperFormsBarcode10[0]',
			'model' => 'I-821|02/20/14|10|&ifEqual({form1[0].#subform[9].P5_checkbox1a[0]}:on, y, )|&ifEqual({form1[0].#subform[9].P5_checkbox1b[0]}:on, y, )|{form1[0].#subform[9].P5_Line1b_language[0]}|&ifEqual({form1[0].#subform[9].P5_checkbox2[0]}:on, y, )|{form1[0].#subform[9].P5_Line2_Attorney[0]}|&ifEqual({form1[0].#subform[9].P5_checkbox2_WhoIs[0]}:on, y, )|&ifEqual({form1[0].#subform[9].P5_checkbox2_IsNot[0]}:on, y, )|{form1[0].#subform[9].P5_Line3b_DateofSignature[0]}|{form1[0].#subform[9].Line3_DaytimePhone[0].P5_Line4_ApplicantDaytimePhoneNumber1[0]}+{form1[0].#subform[9].Line3_DaytimePhone[0].P5_Line4_ApplicantDaytimePhoneNumber2[0]}+{form1[0].#subform[9].Line3_DaytimePhone[0].P5_Line4_ApplicantDaytimePhoneNumber3[0]}|{form1[0].#subform[9].#area[16].P5_Line5_ApplicantMobilePhoneNumber1[0]}+{form1[0].#subform[9].#area[16].P5_Line5_ApplicantMobilePhoneNumber2[0]}+{form1[0].#subform[9].#area[16].P5_Line5_ApplicantMobilePhoneNumber3[0]}|{form1[0].#subform[9].P5_Line6_ApplicantEmailAddress[0]}|{form1[0].#subform[9].P6_Line1a_InterpretersFamilyName[0]}|{form1[0].#subform[9].P6_Line1b_InterpretersGivenName[0]}|{form1[0].#subform[9].P6_Line2_InterpretersBusinessName[0]}|{form1[0].#subform[9].P6_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[9].P6_checkbox3b_Unit[2]}:APT, {form1[0].#subform[9].P6_checkbox3b_Unit[0]}:STE, {form1[0].#subform[9].P6_checkbox3b_Unit[1]}:FLR )+{form1[0].#subform[9].P6_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[9].P6_Line3c_CityOrTown[0]}|{form1[0].#subform[9].P6_Line3d_State[0]}|{form1[0].#subform[9].P6_Line3e_ZipCode[0]}|{form1[0].#subform[9].P6_Line3g_PostalCode[0]}|{form1[0].#subform[9].P6_Line3f_Province[0]}|{form1[0].#subform[9].P6_Line3h_Country[0]}|{form1[0].#subform[9].#area[17].P6_Line4_InterpretersDaytimePhoneNumber1[0]}+{form1[0].#subform[9].#area[17].P6_Line4_InterpretersDaytimePhoneNumber2[0]}+{form1[0].#subform[9].#area[17].P6_Line4_InterpretersDaytimePhoneNumber3[0]}|{form1[0].#subform[9].P6_Line5_InterpretersEmailAddress[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			14 => 
			array (
				'id' => '15',
				'form_id' => '33',
				'page' => '11',
				'pdf_field_barcode' => 'form1[0].#subform[10].PaperFormsBarcode11[0]',
			'model' => 'I-821|02/20/14|11|{form1[0].#subform[10].P6_Language[0]}|{form1[0].#subform[10].P6_Line6b_DateofSignature[0]|{form1[0].#subform[10].P7_Line1a_PreparersFamilyName[0]}|{form1[0].#subform[10].P7_Line1b_PreparersGivenName[0]}|{form1[0].#subform[10].P7_Line2_PreparersBusinessName[0]}|{form1[0].#subform[10].P7_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[10].P7_checkbox3b_Unit[2]}:APT, {form1[0].#subform[10].P7_checkbox3b_Unit[0]}:STE, {form1[0].#subform[10].P7_checkbox3b_Unit[1]}:FLR )+{form1[0].#subform[10].P7_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[10].P7_Line3c_CityOrTown[0]}|{form1[0].#subform[10].P7_Line3d_State[0]}|{form1[0].#subform[10].P7_Line3e_ZipCode[0]}|{form1[0].#subform[10].P7_Line3g_PostalCode[0]}|{form1[0].#subform[10].P7_Line3f_Province[0]}|{form1[0].#subform[10].P7_Line3h_Country[0]}|{form1[0].#subform[10].#area[19].P7_Line4_PreparersDaytimePhoneNumber1[0]}+{form1[0].#subform[10].#area[19].P7_Line4_PreparersDaytimePhoneNumber2[0]}+{form1[0].#subform[10].#area[19].P7_Line4_PreparersDaytimePhoneNumber3[0]}|{form1[0].#subform[10].#area[20].P7_Line5_PreparersFaxNumber1[0]}+{form1[0].#subform[10].#area[20].P7_Line5_PreparersFaxNumber2[0]}+{form1[0].#subform[10].#area[20].P7_Line5_PreparersFaxNumber3[0]}|{form1[0].#subform[10].P7_Line6_PreparersEmailAddress[0]}|&ifEqual({form1[0].#subform[10].P7_checkbox7a[0]}:on, y, )|&ifEqual({form1[0].#subform[10].P7_checkbox7b[0]}:on, y, )|&ifEqual({form1[0].#subform[10].P7_checkbox7b_Extends[0]}:on, y, )|&ifEqual({form1[0].#subform[10].P7_checkbox7b_DoesNotExtend[0]}:on, y, )|{form1[0].#subform[10].P7_Line8b_DateofSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			15 => 
			array (
				'id' => '16',
				'form_id' => '4',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'N-400|02/04/14|1|{form1[0].#subform[0].#area[0].Line1_AlienNumber[0]}|&checkBoxGroup({form1[0].#subform[0].Part1_Eligibility[4]}:A, {form1[0].#subform[0].Part1_Eligibility[3]}:B, {form1[0].#subform[0].Part1_Eligibility[2]}:E, {form1[0].#subform[0].Part1_Eligibility[1]}:C, {form1[0].#subform[0].Part1_Eligibility[0]}:D )|{form1[0].#subform[0].Part1Line5_OtherExplain[0]}|{form1[0].#subform[0].Line1_FamilyName[0]}|{form1[0].#subform[0].Line1_GivenName[0]}|&ifEqual({form1[0].#subform[0].Line1_MiddleName[0]}:N/A, ,{form1[0].#subform[0].Line1_MiddleName[0]} )|
{form1[0].#subform[0].Line2_FamilyName[0]}|{form1[0].#subform[0].Line2_FamilyName[0]}|&ifEqual({form1[0].#subform[0].Line2_MiddleName[0]}:N/A, ,{form1[0].#subform[0].Line2_MiddleName[0]} )|{form1[0].#subform[0].Line3_FamilyName1[0]}|{form1[0].#subform[0].Line3_GivenName1[0]}|&ifEqual({form1[0].#subform[0].Line3_MiddleName1[0]}:N/A, ,{form1[0].#subform[0].Line3_MiddleName1[0]} )|{form1[0].#subform[0].Line3_FamilyName2[0]}|{form1[0].#subform[0].Line3_GivenName2[0]}|&ifEqual({form1[0].#subform[0].Line3_MiddleName2[0]}:N/A, ,{form1[0].#subform[0].Line3_MiddleName2[0]} )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			16 => 
			array (
				'id' => '17',
				'form_id' => '4',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcodep2[0]',
			'model' => 'N-400|02/04/14|2|&ifEqual({form1[0].#subform[1].Line4a_NameChange[1]}:on, Y,N )|{form1[0].#subform[1].Part2Line4a_FamilyName[0]}|{form1[0].#subform[1].Part2Line4a_GivenName[0]}|&ifEqual({form1[0].#subform[1].Part2Line4a_MiddleName[0]}:N/A, ,{form1[0].#subform[1].Part2Line4a_MiddleName[0]} )|{form1[0].#subform[1].Line5_SSN[0]}|{form1[0].#subform[1].Line6_DateOfBirth[0]}|{form1[0].#subform[1].Line7_DateBecamePermanentResident[0]}|{form1[0].#subform[1].Line8_CountryOfBirth[0]}|{form1[0].#subform[1].Part2Line9_CountryOfNationality[0]}|&ifEqual({form1[0].#subform[1].Part2Line10_Accommodation[1]}:on, Y,N )|&ifEqual({form1[0].#subform[1].Part2Line10_Deaf[0]}:on, y, )|{form1[0].#subform[1].Part2Line10_ForeignLanguage[0]}|&ifEqual({form1[0].#subform[1].Part2Line10_Wheelchair[0]}:on, y, )|&ifEqual({form1[0].#subform[1].Part2Line10_Blind[0]}:on, y, )|&ifEqual({form1[0].#subform[1].Part2Line10_OtherAccommodation[0]}:on, y, )|{form1[0].#subform[1].Part2Line10_DescribeAccommodation[0]}|&ifEqual({form1[0].#subform[1].claimdisability[1]}:on, Y,N )|&ifEqual({form1[0].#subform[1].over50[1]}:on, Y,N )|&ifEqual({form1[0].#subform[1].over55[1]}:on, Y,N )|&ifEqual({form1[0].#subform[1].over65[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			17 => 
			array (
				'id' => '18',
				'form_id' => '4',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcodep3[0]',
			'model' => 'N-400|02/04/14|3|{form1[0].#subform[2].#area[3].Line1_DaytimePhoneNumber1[0]}+{form1[0].#subform[2].#area[3].Line1_DaytimePhoneNumber2[0]}+{form1[0].#subform[2].#area[3].Line1_DaytimePhoneNumber3[0]}|{form1[0].#subform[2].#area[4].Line2_DaytimePhoneNumber1[0]}+{form1[0].#subform[2].#area[4].Line2_DaytimePhoneNumber2[0]}+{form1[0].#subform[2].#area[4].Line2_DaytimePhoneNumber3[0]}|{form1[0].#subform[2].#area[5].Line3_DaytimePhoneNumber1[0]}+{form1[0].#subform[2].#area[5].Line3_DaytimePhoneNumber2[0]}+{form1[0].#subform[2].#area[5].Line3_DaytimePhoneNumber3[0]}|{form1[0].#subform[2].#area[6].Line4_DaytimePhoneNumber1[0]}+{form1[0].#subform[2].#area[6].Line4_DaytimePhoneNumber2[0]}+{form1[0].#subform[2].#area[6].Line4_DaytimePhoneNumber3[0]}|{form1[0].#subform[2].Line2_EmailAddress[0]}|{form1[0].#subform[2].Part4Line1_DateResidenceFrom[0]}||{form1[0].#subform[2].Part4Line1_StreetName[0]}|&checkBoxGroup({form1[0].#subform[2].Part4Line1_Unit[2]}:APT, {form1[0].#subform[2].Part4Line1_Unit[1]}:STE, {form1[0].#subform[2].Part4Line1_Unit[0]}:FLR )+{form1[0].#subform[2].Part4Line1_AptSteFlrNumber[0]}|{form1[0].#subform[2].Part4Line1_City[0]}|{form1[0].#subform[2].Part4Line1_County[0]}|{form1[0].#subform[2].Part4Line1_State[0]}|{form1[0].#subform[2].Part4Line1_ZipCode[0]}+{form1[0].#subform[2].Part4Line1_ZipCodeLastFour[0]}|{form1[0].#subform[2].Part4Line1_Province[0]}|{form1[0].#subform[2].Part4Line1_PostalCode[0]}|{form1[0].#subform[2].Part4Line1_Country[0]}|{form1[0].#subform[2].Part4Line1A_InCareOfName[0]}|{form1[0].#subform[2].Part4Line1A_StreetName[0]}|&checkBoxGroup({form1[0].#subform[2].Part4Line1A_Unit[2]}:APT, {form1[0].#subform[2].Part4Line1A_Unit[1]}:STE, {form1[0].#subform[2].Part4Line1A_Unit[0]}:FLR )+{form1[0].#subform[2].Part4Line1A_AptSteFlrNumber[0]}|{form1[0].#subform[2].Part4Line1A_City[0]}|{form1[0].#subform[2].Part4Line1A_State[0]}|{form1[0].#subform[2].Part4Line1A_ZipCode[0]}+{form1[0].#subform[2].Part4Line1A_ZipCodelastfour[0]}|{form1[0].#subform[2].Part4Line1A_Province[0]}|{form1[0].#subform[2].Part4Line1A_Country[0]}|{form1[0].#subform[2].Part4Line1A_PostalCode[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			18 => 
			array (
				'id' => '19',
				'form_id' => '4',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcodep4[0]',
			'model' => 'N-400|02/04/14|4|{form1[0].#subform[3].DateofResidenceFrom[0]}|{form1[0].#subform[3].DateofResidenceTo[0]}|{form1[0].#subform[3].Part4Line3A_StreetName[0]}|&checkBoxGroup({form1[0].#subform[3].Line3A_Unit[2]}:APT, {form1[0].#subform[3].Line3A_Unit[1]}:STE, {form1[0].#subform[3].Line3A_Unit[0]}:FLR )+{form1[0].#subform[3].Line3A_AptSteFlrNumber[0]}|{form1[0].#subform[3].Part4Line3A_City[0]}|{form1[0].#subform[3].Part4Line3A_County[0]}|{form1[0].#subform[3].Part4Line3A_State[0]}|{form1[0].#subform[3].Part4Line3A_ZipCode[0]}+{form1[0].#subform[3].Part4Line3A_ZipCodeLastFour[0]}|{form1[0].#subform[3].Part4Line3A_Province[0]}|{form1[0].#subform[3].Part4Line3A_Country[0]}|{form1[0].#subform[3].Part4Line3A_PostalCode[0]}|{form1[0].#subform[3].BDateofResidenceFrom[0]}|{form1[0].#subform[3].BDateofResidenceTo[0]}|{form1[0].#subform[3].Part4Line3B_BStreetName[0]}|&checkBoxGroup({form1[0].#subform[3].Line3B_Unit[2]}:APT, {form1[0].#subform[3].Line3B_Unit[1]}:STE, {form1[0].#subform[3].Line3B_Unit[0]}:FLR )+{form1[0].#subform[3].Line3B_AptSteFlrNumber[0]}|{form1[0].#subform[3].Part4Line3B_BCity[0]}|{form1[0].#subform[3].Part4Line3BLine1_BCounty[0]}|{form1[0].#subform[3].Part4Line3B_BState[0]}|{form1[0].#subform[3].Part4Line3B_BZipCode[0]}+{form1[0].#subform[3].Part4Line3B_ZipCodeLastFour[0]}|{form1[0].#subform[3].Part4Line3B_BProvince[0]}|{form1[0].#subform[3].Part4Line3B_BCountry[0]}|{form1[0].#subform[3].Part4Line3B_BPostalCode[0]}|{form1[0].#subform[3].CDateofResidenceFrom[0]}|{form1[0].#subform[3].CDateofResidenceTo[0]}|{form1[0].#subform[3].Part4Line3C_StreetName[0]}|&checkBoxGroup({form1[0].#subform[3].Part4Line3C_Unit[2]}:APT, {form1[0].#subform[3].Part4Line3C_Unit[1]}:STE, {form1[0].#subform[3].Part4Line3C_Unit[0]}:FLR )+{form1[0].#subform[3].Part4Line3C_AptSteFlrNumber[0]}|{form1[0].#subform[3].Line1_CCity[0]}|{form1[0].#subform[3].Line1_CCounty[0]}|{form1[0].#subform[3].Part4Line3C_State[0]}|{form1[0].#subform[3].Part4Line3C_ZipCode[0]}+{form1[0].#subform[3].Part4Line3C_ZipCodeLastFour[0]}|{form1[0].#subform[3].Part4Line3_CProvince[0]}|{form1[0].#subform[3].Part4Line3_CCountry[0]}|{form1[0].#subform[3].Part4Line3_CPostalCode[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			19 => 
			array (
				'id' => '20',
				'form_id' => '4',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcodep4[1]',
			'model' => 'N-400|02/04/2014|5|&ifEqual({form1[0].#subform[4].ParentMarriedBefore18[1]}:on, Y,N )|&ifEqual({form1[0].#subform[4].MotherUSCitizen[1]}:on, Y,N )|{form1[0].#subform[4].Part5Line2_MothersFamilyName[0]}|{form1[0].#subform[4].Part5Line2_MothersGivenName[0]}|{form1[0].#subform[4].Part5Line2_MothersMiddleName[0]}|{form1[0].#subform[4].Part5Line2_MothersCountryOfBirth[0]}|{form1[0].#subform[4].Part5Line2_MothersDateofBirth[0]}|&ifEqual({form1[0].#subform[4].FatherUSCitizen[1]}:on, Y,N )|{form1[0].#subform[4].Part5Line3_FathersFamilyName[0]}|{form1[0].#subform[4].Part5Line3_FathersGivenName[0]}|{form1[0].#subform[4].Part5Line3_FathersMiddleName[0]}|{form1[0].#subform[4].Part5Line5_FathersCountryOfBirth[0]}|{form1[0].#subform[4].Part5Line3_DateofBirth[0]}|&ifEqual({form1[0].#subform[4].Line1_Gender[0]}:on, M,F )|{form1[0].#subform[4].Line2_HeightFeet[0]}|{form1[0].#subform[4].Line2_HeightInches[0]}|&ifEqual({form1[0].#subform[4].Line3_Ethnicity[1]}:on, Y,N )|REDO|REDO|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			20 => 
			array (
				'id' => '21',
				'form_id' => '4',
				'page' => '6',
				'pdf_field_barcode' => 'form1[0].#subform[5].PaperFormsBarcodep5[0]',
			'model' => 'N-400|02/04/14|6|REDO|{form1[0].#subform[5].Part7Line1_EmployerName[0]}|{form1[0].#subform[5].Part7Line1_EmployerStreetName[0]}|&checkBoxGroup({form1[0].#subform[5].Part7Line1_EmployerUnit[2]}:APT, {form1[0].#subform[5].Part7Line1_EmployerUnit[1]}:STE, {form1[0].#subform[5].Part7Line1_EmployerUnit[0]}:FLR )+{form1[0].#subform[5].Part7Line1_EmployerAptSteFlrNumber[0]}|{form1[0].#subform[5].Part7Line1_EmployerCity[0]}|{form1[0].#subform[5].Part7Line1_EmpoyerState[0]}|{form1[0].#subform[5].Part7Line1_EmployerZipCode[0]}+{form1[0].#subform[5].Part7Line1_EmployerZipCodeLastFour[0]}|{form1[0].#subform[5].Part7Line1_Province[0]}|{form1[0].#subform[5].Part7Line1_Country[0]}|{form1[0].#subform[5].Part7Line1_PostalCode[0]}|{form1[0].#subform[5].Part7Line1_EmployerFromDate[0]}|{form1[0].#subform[5].Part7Line1_EmployerToDate[0]}|{form1[0].#subform[5].Part7Line1_Occupation[0]}|{form1[0].#subform[5].Part7Line2_EmployerName[0]}|{form1[0].#subform[5].Part7Line2_EmployerStreetName[0]}|&checkBoxGroup({form1[0].#subform[5].Part7Line2_EmployerUnit[2]}:APT, {form1[0].#subform[5].Part7Line2_EmployerUnit[1]}:STE, {form1[0].#subform[5].Part7Line2_EmployerUnit[0]}:FLR )+{form1[0].#subform[5].Part7Line2_EmployerAptSteFlrNumber[0]}|{form1[0].#subform[5].Part7Line2_EmployerCity[0]}|{form1[0].#subform[5].Part7Line2_EmployerState[0]}|{form1[0].#subform[5].Part7Line2_EmployerZipCode[0]}+{form1[0].#subform[5].Part7Line2_EmployerZipCodeLastFour[0]}|{form1[0].#subform[5].Part7Line2_Province[0]}|{form1[0].#subform[5].Part7Line2_Country[0]}|{form1[0].#subform[5].Part7Line2_PostalCode[0]}|{form1[0].#subform[5].Part7Line2_EmployerFromDate[0]}|{form1[0].#subform[5].Part7Line2_EmployerToDate[0]}|{form1[0].#subform[5].Part7Line2_Occupation[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			21 => 
			array (
				'id' => '22',
				'form_id' => '4',
				'page' => '7',
				'pdf_field_barcode' => 'form1[0].#subform[6].PaperFormsBarcode1p6[0]',
			'model' => 'N-400|02/04/14|7|{form1[0].#subform[6].Part7Line3_EmploerName[0]}|{form1[0].#subform[6].Part7Line3_EmployerStreetName[0]}|&checkBoxGroup({form1[0].#subform[6].Part7Line3_EmployerUnit[2]}:APT, {form1[0].#subform[6].Part7Line3_EmployerUnit[1]}:STE, {form1[0].#subform[6].Part7Line3_EmployerUnit[0]}:FLR )+{form1[0].#subform[6].Part7Line3_EmployerAptSteFlrNumber[0]}|{form1[0].#subform[6].Part7Line3_EmployerCity[0]}|{form1[0].#subform[6].Part7Line3_EmployerState[0]}|{form1[0].#subform[6].Part7Line3_EmployerZipCode[0]}+{form1[0].#subform[6].Part4Line3_EmployerZipCodeLastFour[0]}|{form1[0].#subform[6].Part7Line3_Province[0]}|{form1[0].#subform[6].Part7Line3_Country[0]}|{form1[0].#subform[6].Part7Line3_PostalCode[0]}|{form1[0].#subform[6].Part7Line3_EmployerFromDate[0]}|{form1[0].#subform[6].Part7Line3_EmployerToDate[0]}|{form1[0].#subform[6].Part7Line3_Occupation[0]}|{form1[0].#subform[6].Part8Line1_Days[0]}|{form1[0].#subform[6].Part8Line2_Trips[0]}|{form1[0].#subform[6].Line3_DateLeft1[0]}|{form1[0].#subform[6].Line3_DateReturned1[0]|&ifEqual({form1[0].#subform[6].Line3_Last1[0]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled1[0]}|{form1[0].#subform[6].Line3_TotalDays1[0]}|{form1[0].#subform[6].Line3_DateLeft2[0]}|{form1[0].#subform[6].Line3_DateReturned2[0]}|&ifEqual({form1[0].#subform[6].Line3_Last2[1]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled2[0]}|{form1[0].#subform[6].Line3_TotalDays2[0]}|{form1[0].#subform[6].Line3_DateLeft3[0]}|{form1[0].#subform[6].Line3_DateReturned3[0]}|&ifEqual({form1[0].#subform[6].Line3_Last3[0]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled3[0]}|{form1[0].#subform[6].Line3_TotalDays3[0]}|{form1[0].#subform[6].Line3_DateLeft4[0]}|{form1[0].#subform[6].Line3_DateReturned4[0]}|&ifEqual({form1[0].#subform[6].Line3_Last4[1]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled4[0]}|{form1[0].#subform[6].Line3_TotalDays4[0]}|{form1[0].#subform[6].Line3_DateLeft5[0]}|{form1[0].#subform[6].Line3_DateReturned5[0]}|&ifEqual({form1[0].#subform[6].Line3_Last5[0]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled5[0]}|{form1[0].#subform[6].Line3_TotalDays5[0]}|{form1[0].#subform[6].Line3_DateLeft6[0]}|{form1[0].#subform[6].Line3_DateReturned6[0]}|&ifEqual({form1[0].#subform[6].Line3_Last6[1]}:on, Y,N )|{form1[0].#subform[6].Line3_CountriesTraveled6[0]}|{form1[0].#subform[6].Line3_TotalDays6[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			22 => 
			array (
				'id' => '23',
				'form_id' => '4',
				'page' => '8',
				'pdf_field_barcode' => 'form1[0].#subform[7].PaperFormsBarcodep7[0]',
			'model' => 'N-400|02/04/14|8|&checkBoxGroup({form1[0].#subform[7].Part9Line1_MaritalStatus[1]}:1, {form1[0].#subform[7].Part9Line1_MaritalStatus[3]}:2, {form1[0].#subform[7].Part9Line1_MaritalStatus[3]}:7, {form1[0].#subform[7].Part9Line1_MaritalStatus[0]}:3, {form1[0].#subform[7].Part9Line1_MaritalStatus[2]}:4, {form1[0].#subform[7].Part9Line1_MaritalStatus[4]}:5 )|&ifEqual({form1[0].#subform[7].SpouseArmedForces[1]}:on, Y,N )|{form1[0].#subform[7].Part9Line3_TimesMarried[0]}|{form1[0].#subform[7].Part9Line4a_CurrentSpouseFamilyName[0]}|{form1[0].#subform[7].Part9Line4a_CurrentSpouseGivenName[0]}|&ifEqual({form1[0].#subform[7].Part9Line4a_CurrentSpouseMiddleName[0]}:N/A, ,{form1[0].#subform[7].Part9Line4a_CurrentSpouseMiddleName[0]} )|{form1[0].#subform[7].Part9Line4b_BPreviousSpouseFamilyName[0]}|{form1[0].#subform[7].Lineb_GivenName[0]}|&ifEqual({form1[0].#subform[7].Part9Line4b_BPreviousSpouseMiddleName[0]}:N/A, ,{form1[0].#subform[7].Part9Line4b_BPreviousSpouseMiddleName[0]} )|{form1[0].#subform[7].Line4b_FamilyName[0]}|{form1[0].#subform[7].Line2b_GivenName[0]}|&ifEqual({form1[0].#subform[7].Line2c_MiddleName[0]}:N/A, ,{form1[0].#subform[7].Line2c_MiddleName[0]} )|{form1[0].#subform[7].CurrentSpouseBirthdate[0]}|{form1[0].#subform[7].DateEnteredMarriageCurrentSpouse[0]}|{form1[0].#subform[7].Part9Line4G_StreetName[0]}|&checkBoxGroup({form1[0].#subform[7].Part9Line4G_Unit[2]}:APT, {form1[0].#subform[7].Part9Line4G_Unit[1]}:STE, {form1[0].#subform[7].Part9Line4G_Unit[0]}:FLR )+{form1[0].#subform[7].Part9Line4G_AptSteFlrNumber[0]}|{form1[0].#subform[7].Part9Line4D_City[0]}|{form1[0].#subform[7].Part9Line4D_County[0]}|{form1[0].#subform[7].Part9Line4D_State[0]}|{form1[0].#subform[7].Part9Line4D_ZipCode[0]}+{form1[0].#subform[7].Part9Line4D_ZipCodeLastFour[0]}|{form1[0].#subform[7].Part9Line4D_Province[0]}|{form1[0].#subform[7].Part9Line4D_Country[0]}|{form1[0].#subform[7].Part9Line4D_PostalCode[0]}|{form1[0].#subform[7].CurrentSpouseEmployer[0]}|&ifEqual({form1[0].#subform[7].CurrentSpouseCitizen[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			23 => 
			array (
				'id' => '24',
				'form_id' => '4',
				'page' => '9',
				'pdf_field_barcode' => 'form1[0].#subform[8].PaperFormsBarcodep8[0]',
			'model' => 'N-400|02/04/14|9|&ifEqual({form1[0].#subform[8].WhenCurrentSpouseCitizen[0]}:on, B,O )|{form1[0].#subform[8].DateCurrentSpousebecameCitizen[0]}|{form1[0].#subform[8].SpousesCountryofCitizenship[0]}|{form1[0].#subform[8].#area[13].Line7B_AlienNumber[0]}|&ifEqual({form1[0].#subform[8].CurrentSpouseImmigrationStatus[1]}:on, W36,OTH )|{form1[0].#subform[8].CurrentSpouseImmigrationStatusOther[0]}|{form1[0].#subform[8].CurrentSpouse_Timesmarried[0]}|{form1[0].#subform[8].Part9Line8a_PriorSpouseFamilyName[0]}|{form1[0].#subform[8].Part9Line8a_PriorSpouseGivenName[0]}|&ifEqual({form1[0].#subform[8].Part9Line8a_PriorSpouseMiddleName[0]}:N/A, ,{form1[0].#subform[8].Part9Line8a_PriorSpouseMiddleName[0]} )|&checkBoxGroup({form1[0].#subform[8].Line8b_PriorStatus[0]}:USC, {form1[0].#subform[8].Line8b_PriorStatus[1]}:W36, {form1[0].#subform[8].Line8b_PriorStatus[2]}:OTH )|{form1[0].#subform[8].Line8b_ExplainOther[0]}|form1[0].#subform[8].PriorSpouseBirthdate[0]}|{form1[0].#subform[8].PriorSpouseCountryofBirth[0]}|{form1[0].#subform[8].PriorSpouseCountryofCitizenship[0]}|{form1[0].#subform[8].PriorSpousedateofmarriage[0]}|{form1[0].#subform[8].PriorSpousedatemarriageEnded[0]}|&checkBoxGroup({form1[0].#subform[8].MarriageEndedPriorSpouse[0]}:A, {form1[0].#subform[8].MarriageEndedPriorSpouse[1]}:D, {form1[0].#subform[8].MarriageEndedPriorSpouse[2]}:S, {form1[0].#subform[8].MarriageEndedPriorSpouse[3]}:O )|{form1[0].#subform[8].MarriageEndedExplain[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			24 => 
			array (
				'id' => '25',
				'form_id' => '4',
				'page' => '10',
				'pdf_field_barcode' => 'form1[0].#subform[9].PaperFormsBarcodep9[0]',
			'model' => 'N-400|02/04/14|10|{form1[0].#subform[9].Part9Line9a_YourPriorSpouseFamilyName[0]}|{form1[0].#subform[9].Part9Line9a_YourPriorSpouseGivenName[0]}|&ifEqual({form1[0].#subform[9].Part9Line9a_YourPriorSpouseMiddleName[0]}:N/A, ,{form1[0].#subform[9].Part9Line9a_YourPriorSpouseMiddleName[0]} )|&checkBoxGroup({form1[0].#subform[9].YourPriorSpouseStatus[0]}:USC, {form1[0].#subform[9].YourPriorSpouseStatus[1]}:W36, {form1[0].#subform[9].YourPriorSpouseStatus[2]}:OTH )|{form1[0].#subform[9].YourPriorSpouseExplain[0]}|{form1[0].#subform[9].YourPriorSpouseBirthdate[0]}|{form1[0].#subform[9].YourPriorSpouseCountryofBirth[0]}|{form1[0].#subform[9].YourPriorSpouseCountryofCitizenship[0]}|{form1[0].#subform[9].dateofmarriagePriorSpouse[0]}|{form1[0].#subform[9].PriorSpousedatemarriageend[0]}|&checkBoxGroup({form1[0].#subform[9].YourMarriageEndedPriorSpouse[3]}:A, {form1[0].#subform[9].YourMarriageEndedPriorSpouse[2]}:D, {form1[0].#subform[9].YourMarriageEndedPriorSpouse[1]}:S {form1[0].#subform[9].YourMarriageEndedPriorSpouse[0]}:O )|{form1[0].#subform[9].PriorMarriageEndedExplain[0]}|{form1[0].#subform[9].Line1_TotalChildren[0]}|{form1[0].#subform[9].Part10Line2a1_FamilyName[0]}|{form1[0].#subform[9].Part10Line2a1_GivenName[0]}|&ifEqual({form1[0].#subform[9].PartLine2a1_MiddleName[0]}:on, ,{form1[0].#subform[9].PartLine2a1_MiddleName[0]} )|{form1[0].#subform[9].#area[15].Part10Line2A_2_AlienNumber[0]}|{form1[0].#subform[9].Line2a3_ChildsDateofBirth[0]}|{form1[0].#subform[9].Line5i_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			25 => 
			array (
				'id' => '26',
				'form_id' => '4',
				'page' => '11',
				'pdf_field_barcode' => 'form1[0].#subform[10].PaperFormsBarcodep10[0]',
			'model' => 'N-400|02/04/14|11|{form1[0].#subform[10].Part10Line2a5_Street[0]}|&checkBoxGroup({form1[0].#subform[10].Part10Line2a5_Unit[2]}:APT, {form1[0].#subform[10].Part10Line2a5_Unit[1]}:STE, {form1[0].#subform[10].Part10Line2a5_Unit[0]}:FLR )+{form1[0].#subform[10].Part10Line2a5_AptSteFlrNumber[0]}|{form1[0].#subform[10].Part10Line2a5_City[0]}|{form1[0].#subform[10].Part10Line2a5_County[0]}|{form1[0].#subform[10].Part10Line2a5_State[0]}|{form1[0].#subform[10].Part10Line2a5_ZipCode[0]}+{form1[0].#subform[10].Part10Line2a5_ZipCodeLastFour[0]}|{form1[0].#subform[10].Part10Line2a5_Province[0]}|{form1[0].#subform[10].Part10Line2a5_Country[0]}|{form1[0].#subform[10].Part10Line2a5_PostalCode[0]}|{form1[0].#subform[10].Part10Line2a6_Relationship[0]}|{form1[0].#subform[10].Part10Line2b1_FamilyName[0]}|{form1[0].#subform[10].Part10Line2b1_GivenName[0]}|&ifEqual({form1[0].#subform[10].Part10Line2b1_MiddleName[0]}:N/A, ,form1[0].#subform[10].Part10Line2b1_MiddleName[0] )|{form1[0].#subform[10].#area[17].Part10Line2b2_AlienNumber[0]}|{form1[0].#subform[10].Part10Line2b3_DateofBirth[0]}|{form1[0].#subform[10].Line2a4_ChildBCountryofBirth[0]}|{form1[0].#subform[10].Part10Line2b5_Street[0]}|&checkBoxGroup({form1[0].#subform[10].Part10Line2b5_Unit[2]}:APT, {form1[0].#subform[10].Part10Line2b5_Unit[1]}:STE, {form1[0].#subform[10].Part10Line2b5_Unit[0]}:FLR )+{form1[0].#subform[10].Part10Line2b5_AptSteFlrNumber[0]}|{form1[0].#subform[10].Part10Line2b5_City[0]}|{form1[0].#subform[10].Part10Line2b5_County[0]}|{form1[0].#subform[10].Part10Line2b5_State[0]}|{form1[0].#subform[10].Part10Line2b5_ZipCode[0]}+{form1[0].#subform[10].Part10Line2b5_ZipCodeLastFour[0]}|{form1[0].#subform[10].Part10Line2b5_Province[0]}|{form1[0].#subform[10].Part10Line2b5_Country[0]}|{form1[0].#subform[10].Part10Line2b5_PostalCodde[0]}|{form1[0].#subform[10].Part10Line2b6_Relationship[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			26 => 
			array (
				'id' => '27',
				'form_id' => '4',
				'page' => '12',
				'pdf_field_barcode' => 'form1[0].#subform[11].PaperFormsBarcodep11[0]',
			'model' => 'N-400|02/04/14|12|{form1[0].#subform[11].Part10Line2c1_FamilyName[0]}|{form1[0].#subform[11].Part10Line2c1_GivenName[0]}|&ifEqual({form1[0].#subform[11].Part10Line2c1_MiddleName[0]}:N/A, ,{form1[0].#subform[11].Part10Line2c1_MiddleName[0]} )|{form1[0].#subform[11].#area[19].Part10Line2c2_AlienNumber[0]}|{form1[0].#subform[11].Part10Line2c3_DateofBirth[0]}|{form1[0].#subform[11].Part10Line2c4_CountryofBirth[0]}|{form1[0].#subform[11].Part10Line2c5_Street[0]}|&checkBoxGroup({form1[0].#subform[11].Part10Line2c5_Unit[2]}:APT, {form1[0].#subform[11].Part10Line2c5_Unit[1]}:STE, {form1[0].#subform[11].Part10Line2c5_Unit[0]}:FLR )+{form1[0].#subform[11].Part10Line2c5_AptSteFlrNumber[0]}|{form1[0].#subform[11].Part10Line2c5_City[0]}|{form1[0].#subform[11].Part10Line2c5_County[0]}|{form1[0].#subform[11].Part10Line2c5_State[0]}|{form1[0].#subform[11].Part10Line2c5_ZipCode[0]}+{form1[0].#subform[11].Part10Line2c5_ZipCodeLastFour[0]}|{form1[0].#subform[11].Part10Line2c5_Province[0]}|{form1[0].#subform[11].Part10Line2c5_Country[0]}|{form1[0].#subform[11].Part10Line2c5_PostalCode[0]}|{form1[0].#subform[11].Part10Line2c6_Relationship[0]}|{form1[0].#subform[11].Part10Line2d1_FamilyName[0]}|{form1[0].#subform[11].Part10Line2d1_GivenName[0]}|&ifEqual({form1[0].#subform[11].Part10Line2d1_MiddleName[0]}:N/A, ,form1[0].#subform[11].Part10Line2d1_MiddleName[0] )|{form1[0].#subform[11].#area[20].Part10Line2d2_AlienNumber[0]}|{form1[0].#subform[11].Part10Line2d3_DateofBirth[0]}|{form1[0].#subform[11].Part10Line2d4_CountryofBirth[0]}|{form1[0].#subform[11].Part10Line2d5_Street[0])|&checkBoxGroup({form1[0].#subform[11].Part10Line2d5_Unit[2]}:APT, {form1[0].#subform[11].Part10Line2d5_Unit[1]}:STE, {form1[0].#subform[11].Part10Line2d5_Unit[0]}:FLR )+{form1[0].#subform[11].Part10Line2d5_AptSteFlrNumber[0]}|{form1[0].#subform[11].Part10Line2d5_City[0]}|{form1[0].#subform[11].Part10Line2d5_County[0]}|{form1[0].#subform[11].Part10Line2d5_State[0]}|{form1[0].#subform[11].Part10Line2d5_ZipCode[0]}+{form1[0].#subform[11].Part10Line2d5_ZipCodeLastFour[0]}|{form1[0].#subform[11].Part10Line2d5_Province[0]}|{form1[0].#subform[11].Part10Line2d5_Country[0]}|{form1[0].#subform[11].Part10Line2d5_PostalCode[0]}|{form1[0].#subform[11].Part10Line2d6_Relationship[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			27 => 
			array (
				'id' => '28',
				'form_id' => '4',
				'page' => '13',
				'pdf_field_barcode' => 'form1[0].#subform[12].PaperFormsBarcodep12[0]',
			'model' => 'N-400|02/04/14|13|&ifEqual({form1[0].#subform[12].Part11Line1_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line2_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line3_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line4_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line5_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line6_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line7a_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line7b_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line8_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line9a_Checkboxes[1]}:on, Y,N )|{form1[0].#subform[12].Line9b_NameOfGroup1[0]}|{form1[0].#subform[12].Line9b_PurposeOfGroup1[0]}|{form1[0].#subform[12].Line9b_DateTo1[0]}|{form1[0].#subform[12].Line9b_DateFrom1[0]}|{form1[0].#subform[12].Line9b_NameOfGroup2[0]}|{form1[0].#subform[12].Line9b_PurposeOfGroup2[0]}|{form1[0].#subform[12].Line9b_DateTo2[0]}|{form1[0].#subform[12].Line9b_DateFrom2[0]}|{form1[0].#subform[12].Line9b_NameOfGroup3[0]}|{form1[0].#subform[12].Line9b_PurposeOfGroup3[0]}|{form1[0].#subform[12].Line9b_DateTo3[0]}|{form1[0].#subform[12].Line9b_DateFrom3[0]}|{form1[0].#subform[12].Line9b_NameOfGroup4[0]}|{form1[0].#subform[12].Line9b_PurposeOfGroup4[0]}|{form1[0].#subform[12].Line9b_DateTo4[0]}|{form1[0].#subform[12].Line9b_DateFrom4[0]}|&ifEqual({form1[0].#subform[12].Part11Line10a_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line10b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[12].Part11Line10c_Checkboxes[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			28 => 
			array (
				'id' => '29',
				'form_id' => '4',
				'page' => '14',
				'pdf_field_barcode' => 'form1[0].#subform[13].PaperFormsBarcodep13[0]',
			'model' => 'N-400|02/04/14|14|&ifEqual({form1[0].#subform[13].Part11Line11_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line12_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line12a_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line12b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line12c_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13c_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13d_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13e_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line13f_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14b_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14c_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14d_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14e_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14f_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14g_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14h_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[13].Part11Line14i_Checkboxes[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			29 => 
			array (
				'id' => '30',
				'form_id' => '4',
				'page' => '15',
				'pdf_field_barcode' => 'form1[0].#subform[14].PaperFormsBarcodep14[0]',
			'model' => 'N-400|02/04/14|15|&ifEqual({form1[0].#subform[14].Part11Line15a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line15b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line15c_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line15d_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line15e_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line16_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line16a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line16b_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line17_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line17a_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line17b_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line18_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line19_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line20_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line21_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line22_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line23_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line24_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[14].Part11Line25_Checkboxes[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			30 => 
			array (
				'id' => '31',
				'form_id' => '4',
				'page' => '16',
				'pdf_field_barcode' => 'form1[0].#subform[15].PaperFormsBarcodep15[0]',
			'model' => 'N-400|02/04/14|16|&ifEqual({form1[0].#subform[15].Part11Line26a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line26b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line27a_Checkboxes[1]}:on, Y,N )|{form1[0].#subform[15].Part11Line27b_Years[0]}|{form1[0].#subform[15].Part11Line27b_Months[0]}|{form1[0].#subform[15].Part11Line27b_Days[0]}|{form1[0].#subform[15].Part11Line28_why1[0]}|{form1[0].#subform[15].Part11Line28_Date1[0]}|{form1[0].#subform[15].Part11Line28_Where1[0]}|{form1[0].#subform[15].Part11Line28_Outcome1[0]}|{form1[0].#subform[15].Part11Line28_why2[0]}|{form1[0].#subform[15].Part11Line28_Date2[0]}|{form1[0].#subform[15].Part11Line28_Where2[0]}|{form1[0].#subform[15].Part11Line28_Outcome2[0]}|{form1[0].#subform[15].Part11Line28_why3[0]}|{form1[0].#subform[15].Part11Line28_Date3[0]}|{form1[0].#subform[15].Part11Line28_Where3[0]}|{form1[0].#subform[15].Part11Line28_Outcome3[0]}|{form1[0].#subform[15].Part11Line28_why4[0]}|{form1[0].#subform[15].Part11Line28_Date4[0]}|{form1[0].#subform[15].Part11Line28_Where4[0]}|{form1[0].#subform[15].Part11Line28_Outcome4[0]}|{form1[0].#subform[15].Part11Line28_why5[0]}|{form1[0].#subform[15].Part11Line28_Date5[0]}|{form1[0].#subform[15].Part11Line28_Where5[0]}|{form1[0].#subform[15].Part11Line28_Outcome5[0]}|&ifEqual({form1[0].#subform[15].Part11Line29a_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29b_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29c_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29d_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29e_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29f_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29g_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29h_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[15].Part11Line29i_Checkboxes[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			31 => 
			array (
				'id' => '32',
				'form_id' => '4',
				'page' => '17',
				'pdf_field_barcode' => 'form1[0].#subform[16].PaperFormsBarcodep16[0]',
			'model' => 'N-400|02/04/14|17|&ifEqual({form1[0].#subform[16].Part11Line30_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line31_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line32_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line33_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line34_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line35_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line36_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line37_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line38_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line39_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line40_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line41_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line42_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line43_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line44_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[16].Part11Line45a_Checkboxes[1]}:on, Y,N )|{form1[0].#subform[16].Part11Line46_DateRegistered[0]}|{form1[0].#subform[16].Part11Line46_SelectiveServiceNumber[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			32 => 
			array (
				'id' => '33',
				'form_id' => '4',
				'page' => '18',
				'pdf_field_barcode' => 'form1[0].#subform[17].PaperFormsBarcodep17[0]',
			'model' => 'N-400|02/04/14|18|&ifEqual({form1[0].#subform[17].Part11Line46_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line47_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line48_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line49_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line50_Checkboxes[1]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line51_Checkboxes[0]}:on, Y,N )|&ifEqual({form1[0].#subform[17].Part11Line52_Checkboxes[1]}:on, Y,N )|{form1[0].#subform[17].Part12DateofSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			33 => 
			array (
				'id' => '34',
				'form_id' => '4',
				'page' => '19',
				'pdf_field_barcode' => 'form1[0].#subform[18].PaperFormsBarcodep18[0]',
			'model' => 'N-400|02/04/14|19|{form1[0].#subform[18].Part13_PreparersFamilyName[0]}|{form1[0].#subform[18].Part13_PreparersGivenName[0]}|&ifEqual({form1[0].#subform[18].Part13_PreparersMiddleName[0]}:N/A, ,{form1[0].#subform[18].Part13_PreparersMiddleName[0]} )|{form1[0].#subform[18].Part13_DateofSignature[0]}|&ifEqual({form1[0].#subform[18].Part14_FirmName[0]}:N/A, ,{form1[0].#subform[18].Part14_FirmName[0]} )|{form1[0].#subform[18].#area[28].Preparer_DaytimePhoneNumber1[0]}+{form1[0].#subform[18].#area[28].Preparer_DaytimePhoneNumber2[0]}+{form1[0].#subform[18].#area[28].Preparer_DaytimePhoneNumber3[0]}|{form1[0].#subform[18].Part14_StreetName[0]}|&checkBoxGroup({form1[0].#subform[18].Part14Line1_Unit[2]}:APT, {form1[0].#subform[18].Part14Line1_Unit[1]}:STE, {form1[0].#subform[18].Part14Line1_Unit[0]}:FLR )+{form1[0].#subform[18].Part14_AptSteFlrNumber[0]}|{form1[0].#subform[18].Part14_City[0]}|{form1[0].#subform[18].Part14_County[0]}|{form1[0].#subform[18].Line2_State[0]}|{form1[0].#subform[18].Part14_ZipCode[0]}+{form1[0].#subform[18].Part14_ZipcodeLastFour[0]}|{form1[0].#subform[18].Part14_Province[0]}|{form1[0].#subform[18].Part14_Country[0]}|{form1[0].#subform[18].Part14_PostalCode[0]}|{form1[0].#subform[18].Part14_EmailAddress[0]}|{form1[0].#subform[18].#area[27].Preparers_FaxPhoneNumber1[0]}+{form1[0].#subform[18].#area[27].Preparers_FaxPhoneNumber2[0]}+{form1[0].#subform[18].#area[27].Preparers_FaxPhoneNumber3[0]}|{form1[0].#subform[18].Part13_Language[0]}|{form1[0].#subform[18].Part13_DateYourSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			34 => 
			array (
				'id' => '35',
				'form_id' => '4',
				'page' => '20',
				'pdf_field_barcode' => 'form1[0].#subform[19].PaperFormsBarcodep20[0]',
			'model' => 'N-400|02/04/14|20|{form1[0].#subform[19].Part13_LanguageUsed[0]}|{form1[0].#subform[19].Part14_InterpretersFamilyName[0]}|{form1[0].#subform[19].Part14_InterpretersGivenName[0]}|&ifEqual({form1[0].#subform[19].Part14_InterpretersMiddleName[0]}:N/A, ,{form1[0].#subform[19].Part14_InterpretersMiddleName[0]} )|{form1[0].#subform[19].Part13_Date[0]}|{form1[0].#subform[19].#area[30].Part14_DaytimePhoneNumber1[0]}+{form1[0].#subform[19].#area[30].Part14_DaytimePhoneNumber2[0]}+{form1[0].#subform[19].#area[30].Part14_DaytimePhoneNumber3[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			35 => 
			array (
				'id' => '36',
				'form_id' => '4',
				'page' => '21',
				'pdf_field_barcode' => 'form1[0].#subform[20].PaperFormsBarcodep20[1]',
				'model' => 'N-400|02/04/14|21|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			36 => 
			array (
				'id' => '37',
				'form_id' => '45',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-131|01/22/16|1|&ifEqual({form1[0].#subform[0].G28_Attached[0]}:on, Y, )|{form1[0].#subform[0].Line1a_FamilyName[0]}|{form1[0].#subform[0].Line1b_GivenName[0]}|&ifEqual({form1[0].#subform[0].Line1c_MiddleName[0]}:N/A, ,{form1[0].#subform[0].Line1c_MiddleName[0]} )|{form1[0].#subform[0].Line2a_InCareofName[0]}|{form1[0].#subform[0].Line2b_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[0].Line2c_Unit[2]}:APT, {form1[0].#subform[0].Line2c_Unit[0]}:STE, {form1[0].#subform[0].Line2c_Unit[1]}:FLR )+{form1[0].#subform[0].Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[0].Line2d_CityOrTown[0]}|{form1[0].#subform[0].Line2e_State[0]}|{form1[0].#subform[0].Line2f_ZipCode[0]}|{form1[0].#subform[0].Line2g_PostalCode[0]}|{form1[0].#subform[0].Line2h_Province[0]}|{form1[0].#subform[0].Line2i_Country[0]}|{form1[0].#subform[0].#area[1].Line3_AlienNumber[0]}|{form1[0].#subform[0].Line4_CountryOfBirth[0]}|{form1[0].#subform[0].Line5_CountryOfCitizenship[0]}|{form1[0].#subform[0].Line6_ClassofAdmission[0]}|&ifEqual({form1[0].#subform[0].Line7_Male[0]}:on, Y, )|&ifEqual({form1[0].#subform[0].Line7_Female[0]}:on, Y, )|{form1[0].#subform[0].Line8_DateOfBirth[0]}|{form1[0].#subform[0].#area[2].Line9_SSN[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			37 => 
			array (
				'id' => '38',
				'form_id' => '45',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode1[1]',
			'model' => 'I-131|01/22/16|2|&ifEqual({form1[0].#subform[1].Line1a_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1b_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1c_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1d_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1e_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1f_checkbox[0]}:on, Y, )|{form1[0].#subform[1].Line2a_FamilyName[0]}|{form1[0].#subform[1].Line2b_GivenName[0]}|&ifEqual({form1[0].#subform[1].Line2c_MiddleName[0]}:N/A, ,{form1[0].#subform[1].Line2c_MiddleName[0]} )|{form1[0].#subform[1].Line2d_DateOfBirth[0]}|{form1[0].#subform[1].Line2e_CountryOfBirth[0]}|{form1[0].#subform[1].Line2f_CountryOfCitizenship[0]}|{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber1[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber2[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber3[0]}|{form1[0].#subform[1].Line2h_InCareofName[0]}|{form1[0].#subform[1].Line2i_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].Line2j_Unit[2]}:APT, {form1[0].#subform[1].Line2j_Unit[0]}:STE, {form1[0].#subform[1].Line2j_Unit[1]}:FLR )+{form1[0].#subform[1].Line2j_AptSteFlrNumber[0]}|{form1[0].#subform[1].Line2k_CityOrTown[0]}|{form1[0].#subform[1].Line2l_State[0]}|{form1[0].#subform[1].Line2m_ZipCode[0]}|{form1[0].#subform[1].Line2n_PostalCode[0]}|{form1[0].#subform[1].Line2o_Province[0]}|{form1[0].#subform[1].Line2p_Country[0]}|{form1[0].#subform[1].Line1_DateIntendedDeparture[0]}|{form1[0].#subform[1].Line2_ExpectedLengthTrip[0]}|&ifEqual({form1[0].#subform[1].Line3a_Yes[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line4a_Yes[0]}:on, Y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			38 => 
			array (
				'id' => '39',
				'form_id' => '45',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode1[2]',
				'model' => 'I-131|01/22/16|3|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			39 => 
			array (
				'id' => '40',
				'form_id' => '45',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode1[3]',
				'model' => 'I-131|01/22/16|4|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			40 => 
			array (
				'id' => '41',
				'form_id' => '45',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode1[4]',
				'model' => 'I-131|01/22/16|5|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			41 => 
			array (
				'id' => '42',
				'form_id' => '10',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-864|07/02/15|1|{form1[0].#subform[0].P1_Line1_Name[0]}|&ifEqual({form1[0].#subform[0].P1_Line1a_Checkbox[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_Line1b_Checkbox[0]}:on, y, )|{form1[0].#subform[0].P1_Line1b_Relationship[0]}|&ifEqual({form1[0].#subform[0].P1_Line1c_Checkbox[0]}:on, y, )|{form1[0].#subform[0].P1_Line1c_InterestIn[0]}|{form1[0].#subform[0].P1_Line1c_Relationship[0]}|&ifEqual({form1[0].#subform[0].P1_Line1d_Checkbox[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_Line1e_Checkbox[0]}:on, y, )|&ifEqual({form1[0].#subform[0].P1_Line1e1_Checkbox[0]}:on, 1, )+&ifEqual({form1[0].#subform[0].P1_Line1e1_Checkbox[1]}:on, 2, )|&ifEqual({form1[0].#subform[0].P1_Line1f_Checkbox[0]}:on, y, )|{form1[0].#subform[0].P1_Line1f_Relationship[0]}|{form1[0].#subform[0].P2_Line1a_FamilyName[0]}|{form1[0].#subform[0].P2_Line1b_GivenName[0]}|{form1[0].#subform[0].P2_Line1c_MiddleName[0]}|{form1[0].#subform[0].P2_Line2a_InCareOf[0]}|{form1[0].#subform[0].P2_Line2b_StreetNumberName[0]}+&checkBoxGroup({form1[0].#subform[0].P2_Line2c_Unit[0]}:APT, {form1[0].#subform[0].P2_Line2c_Unit[1]}:STE, {form1[0].#subform[0].P2_Line2c_Unit[2]}:FLR)+{form1[0].#subform[0].P2_Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[0].P2_Line2d_CityOrTown[0]}|{form1[0].#subform[0].P2_Line2e_State[0]}|{form1[0].#subform[0].P2_Line2f_ZipCode[0]}|{form1[0].#subform[0].P2_Line2g_Province[0]}|{form1[0].#subform[0].P2_Line2h_PostalCode[0]}|{form1[0].#subform[0].P2_Line2i_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			42 => 
			array (
				'id' => '43',
				'form_id' => '10',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode2[0]',
			'model' => 'I-864|07/02/15|2|{form1[0].#subform[1].P2_Line3_CountryOfCitenship[0]}|{form1[0].#subform[1].P2_Line4_DateOfBirth[0]}|{form1[0].#subform[1].#area[1].P2_Line5_AlienNumber[0]}|{form1[0].#subform[1].#area[2].P2_Line6_AcctIdentifier[0]}|{form1[0].#subform[1].P2_Line7_DaytimeTelephoneNumber[0]}|&ifEqual({form1[0].#subform[1].P3_Line1_Checkbox[0]}:on, y, )+&ifEqual({form1[0].#subform[1].P3_Line1_Checkbox[1]}:on, n, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			43 => 
			array (
				'id' => '44',
				'form_id' => '10',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode3[0]',
			'model' => 'I-864|07/02/15|3|{form1[0].#subform[2].P3_Line19_Relationship[0]}|{form1[0].#subform[2].P3_Line20_DateOfBirth[0]}|{form1[0].#subform[2].#area[9].P3_Line21_AlienNumber[0]}|{form1[0].#subform[2].#area[10].P3_Line22_AcctIdentifier[0]}|{form1[0].#subform[2].P3_Line23a_FamilyName[0]}|{form1[0].#subform[2].P3_Line23b_GivenName[0]}|{form1[0].#subform[2].P3_Line23c_MiddleName[0]}|{form1[0].#subform[2].P3_Line24_Relationship[0]}|{form1[0].#subform[2].P3_Line25_DateOfBirth[0]}|{form1[0].#subform[2].#area[11].P3_Line26_AlienNumber[0]}|{form1[0].#subform[2].#area[12].P3_Line27_AcctIdentifier[0]}|{form1[0].#subform[2].P3_Line28_TotalNumberofImmigrants[0]}|{form1[0].#subform[2].P4_Line1a_FamilyName[0]}|{form1[0].#subform[2].P4_Line1b_GivenName[0]}|{form1[0].#subform[2].P4_Line1c_MiddleName[0]}|{form1[0].#subform[2].P4_Line2a_InCareOf[0]}|{form1[0].#subform[2].P4_Line2b_StreetNumberName[0]}+&checkBoxGroup({form1[0].#subform[2].P4_Line2c_Unit[0]}:APT, {form1[0].#subform[2].P4_Line2c_Unit[1]}:STE, {form1[0].#subform[2].P4_Line2c_Unit[2]}:FLR )+{form1[0].#subform[2].P4_Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[2].P4_Line2d_CityOrTown[0]}|{form1[0].#subform[2].P4_Line2e_State[0]}|{form1[0].#subform[2].P4_Line2f_ZipCode[0]}|{form1[0].#subform[2].P4_Line2g_Province[0]}|{form1[0].#subform[2].P4_Line2h_PostalCode[0]}|{form1[0].#subform[2].P4_Line2i_Country[0]}|&ifEqual({form1[0].#subform[2].P4_Line3_Checkbox[1]}:on, y, )+&ifEqual({form1[0].#subform[2].P4_Line3_Checkbox[0]}:on, n, )|{form1[0].#subform[2].P4_Line4a_StreetNumberName[0]+&checkBoxGroup({form1[0].#subform[2].P4_Line4b_Unit[0]}:APT, {form1[0].#subform[2].P4_Line4b_Unit[1]}:STE, {form1[0].#subform[2].P4_Line4b_Unit[2]}:FLR)}+{form1[0].#subform[2].P4_Line4b_AptSteFlrNumber[0]}|{form1[0].#subform[2].P4_Line4c_CityOrTown[0]}|{form1[0].#subform[2].P4_Line4d_State[0]}|{form1[0].#subform[2].P4_Line4e_ZipCode[0]}|{form1[0].#subform[2].P4_Line4f_Province[0]}|{form1[0].#subform[2].P4_Line4g_PostalCode[0]}|{form1[0].#subform[2].P4_Line4h_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			44 => 
			array (
				'id' => '45',
				'form_id' => '10',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode4[0]',
			'model' => 'I-864|07/02/15|4|{form1[0].#subform[3].P4_Line5_CountryOfDomicile[0]}|{form1[0].#subform[3].P4_Line8_StateorProvinceofBirth[0]}|{form1[0].#subform[3].P4_Line7_CityofBirth[0]}|{form1[0].#subform[3].P4_Line8_StateorProvinceofBirth[0]}|{form1[0].#subform[3].P4_Line9_CountryOfBirth[0]}|{form1[0].#subform[3].P4_Line10_SocialSecurityNumber[0]}|&ifEqual({form1[0].#subform[3].P4_Line11a_Checkbox[0]}:on, y, )|&ifEqual({form1[0].#subform[3].P4_Line11b_Checkbox[0]}:on, y, )|&ifEqual({form1[0].#subform[3].P4_Line11c_Checkbox[0]}:on, y, )|{form1[0].#subform[3].Line11c_AlienNumberGroup[0].P4_Line12_AlienNumber[0]}|{form1[0].#subform[3].#area[14].P4_Line13_AcctIdentifier[0]}|&ifEqual({form1[0].#subform[3].P4_Line14_Checkboxes[1]}:on, y, )+&ifEqual({form1[0].#subform[3].P4_Line14_Checkboxes[0]}:on, n, )|{form1[0].#subform[3].P5_Line1_Number[0]}|{form1[0].#subform[3].P5_Line2_Yourself[0]}|{form1[0].#subform[3].P5_Line3_Married[0]}|{form1[0].#subform[3].P5_Line4_DependentChildren[0]}|{form1[0].#subform[3].P5_Line5_OtherDependents[0]}|{form1[0].#subform[3].P5_Line6_Sponsors[0]}|{form1[0].#subform[3].P5_Line7_SameResidence[0]}|{form1[0].#subform[3].P5_Line8_HouseholdSize[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			45 => 
			array (
				'id' => '46',
				'form_id' => '10',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode5[0]',
			'model' => 'I-864|07/02/15|5|&ifEqual({form1[0].#subform[4].P6_Line1_Checkboxes[0]}:on, A, )+&ifEqual({form1[0].#subform[4].P6_Line1_Checkboxes[1]}:on, B, )+&ifEqual({form1[0].#subform[4].P6_Line1_Checkboxes[2]}:on, C, )+&ifEqual({form1[0].#subform[4].P6_Line1_Checkboxes[3]}:on, D, )|{form1[0].#subform[4].P6_Line1a_NameofEmployer[0]}|{form1[0].#subform[4].P6_Line1a1_NameofEmployer[0]}|{form1[0].#subform[4].P6_Line1a2_NameofEmployer[0]}|{form1[0].#subform[4].P6_Line1b_EmployedAs[0]}|{form1[0].#subform[4].P6_Line1c_CompanyName[0]}|{form1[0].#subform[4].P6_Line1c_DateofRetirement[0]}|{form1[0].#subform[4].P6_Line1d_DateofUnemployment[0]}|{form1[0].#subform[4].P6_Line2_TotalIncome[0]}|{form1[0].#subform[4].P6_Line3_Name[0]}|{form1[0].#subform[4].P6_Line4_Relationship[0]}|{form1[0].#subform[4].P6_Line5_CurrentIncome[0]}|{form1[0].#subform[4].P6_Line6_Name[0]}|{form1[0].#subform[4].P6_Line7_Relationship[0]}|{form1[0].#subform[4].P6_Line8_CurrentIncome[0]}|{form1[0].#subform[4].P6_Line9_Name[0]}|{form1[0].#subform[4].P6_Line10_Relationship[0]}|{form1[0].#subform[4].P6_Line11_CurrentIncome[0]}|{form1[0].#subform[4].P6_Line12_Name[0]}|{form1[0].#subform[4].P6_Line13_Relationship[0]}|{form1[0].#subform[4].P6_Line14_CurrentIncome[0]}|{form1[0].#subform[4].P6_Line15_TotalHouseholdIncome[0]}|&ifEqual({form1[0].#subform[4].P6_Line16_CompletedForm[0]}:on, y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			46 => 
			array (
				'id' => '47',
				'form_id' => '10',
				'page' => '6',
				'pdf_field_barcode' => 'form1[0].#subform[5].PaperFormsBarcode6[0]',
			'model' => 'I-864|07/02/15|6|&ifEqual({form1[0].#subform[5].P6_Line17_NotNeedComplete[0]}:on, Y, )|{form1[0].#subform[5].P6_Line17_Name[0]}|&ifEqual({form1[0].#subform[5].P6_Line18a_Checkbox[1]}:on, Y, )+&ifEqual({form1[0].#subform[5].P6_Line18a_Checkbox[0]}:on, N, )|&ifEqual({form1[0].#subform[5].P6_Line1_Employed[0]}:on, Y, )|{form1[0].#subform[5].P6_Line19a_TaxYear[0]}|{form1[0].#subform[5].P6_Line19a_TotalIncome[0]}|{form1[0].#subform[5].P6_Line19b_TaxYear[0]}|{form1[0].#subform[5].P6_Line19b_TotalIncome[0]}|{form1[0].#subform[5].P6_Line19c_TaxYear[0]}|{form1[0].#subform[5].P6_Line19c_TotalIncome[0]}|&ifEqual({form1[0].#subform[5].P6_Line20_Attached[0]}:on, Y, )|{form1[0].#subform[5].P7_Line1_BalanceofAccounts[0]}|{form1[0].#subform[5].P7_Line2_RealEstate[0]}|{form1[0].#subform[5].P7_Line3_StocksBonds[0]}|{form1[0].#subform[5].P7_Line4_Total[0]}|{form1[0].#subform[5].P7_Line5a_NameofRelative[0]}|{form1[0].#subform[5].P7_Line5b_Assets[0]}|{form1[0].#subform[5].P7_Line6_BalanceofAccounts[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			47 => 
			array (
				'id' => '48',
				'form_id' => '10',
				'page' => '7',
				'pdf_field_barcode' => 'form1[0].#subform[6].PaperFormsBarcode7[0]',
				'model' => 'I-864|07/02/15|7|{form1[0].#subform[6].P7_Line7_RealEstate[0]}|{form1[0].#subform[6].P7_Line8_StocksBonds[0]}|{form1[0].#subform[6].P7_Line9_Total[0]}|{form1[0].#subform[6].P7_Line10_TotalValueAssets[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			48 => 
			array (
				'id' => '49',
				'form_id' => '10',
				'page' => '8',
				'pdf_field_barcode' => 'form1[0].#subform[7].PaperFormsBarcode8[0]',
			'model' => 'I-864|07/02/15|8|&ifEqual({form1[0].#subform[7].P8_Line1_Checkbox[1]}:on, A, )+&ifEqual({form1[0].#subform[7].P8_Line1_Checkbox[0]}:on, B, )|{form1[0].#subform[7].P8_Line1b_language[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			49 => 
			array (
				'id' => '50',
				'form_id' => '10',
				'page' => '9',
				'pdf_field_barcode' => 'form1[0].#subform[8].PaperFormsBarcode9[0]',
			'model' => 'I-864|07/02/15|9|&ifEqual({form1[0].#subform[8].P8_Line2_Checkbox[0]}:on, Y, )|{form1[0].#subform[8].P8_Line2_Attorney[0]}|&ifEqual({form1[0].#subform[8].P8_Line2_Who[0]}:on, Y, )+&ifEqual({form1[0].#subform[8].P8_Line2_Who[1]}:on, N, )|{form1[0].#subform[8].P8_Line3_DaytimeTelephoneNumber[0]}|{form1[0].#subform[8].P8_Line4_MobileTelephoneNumber[0]}|{form1[0].#subform[8].P7Line7_EmailAddress[0]}|{form1[0].#subform[8].P7Line9b_DateofSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			50 => 
			array (
				'id' => '51',
				'form_id' => '10',
				'page' => '10',
				'pdf_field_barcode' => 'form1[0].#subform[9].PaperFormsBarcode10[0]',
			'model' => 'I-864|07/02/15|10|{form1[0].#subform[9].P9_Line1a_InterpretersFamilyName[0]}|{form1[0].#subform[9].P9_Line1b_InterpretersGivenName[0]}|{form1[0].#subform[9].P8Line2_InterpretersBusinessName[0]}|{form1[0].#subform[9].P9_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[9].P9_Line3b_Unit[2]}:APT, {form1[0].#subform[9].P9_Line3b_Unit[1]}:STE, {form1[0].#subform[9].P9_Line3b_Unit[0]}:FLR )+{form1[0].#subform[9].P9_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[9].P9_Line3c_CityOrTown[0]}|{form1[0].#subform[9].P9_Line3d_State[0]}|{form1[0].#subform[9].P9_Line3e_ZipCode[0]}|{form1[0].#subform[9].P9_Line3f_Province[0]}|{form1[0].#subform[9].P9_Line3g_PostalCode[0]}|{form1[0].#subform[9].P9_Line3h_Country[0]}|{form1[0].#subform[9].P9_Line4_InterpretersDaytimePhoneNumber[0]}|{form1[0].#subform[9].P9_Line5_InterpretersEmailAddress[0]}|{form1[0].#subform[9].P9_Language[0]}|{form1[0].#subform[9].P9_Line6b_DateofSignature[0]}|{form1[0].#subform[9].P10_Line1a_PreparersFamilyName[0]}|{form1[0].#subform[9].P10_Line1b_PreparersGivenName[0]}|{form1[0].#subform[9].P10_Line2_PreparersBusinessName[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			51 => 
			array (
				'id' => '52',
				'form_id' => '10',
				'page' => '11',
				'pdf_field_barcode' => 'form1[0].#subform[10].PaperFormsBarcode11[0]',
			'model' => 'I-864|07/02/15|11|{form1[0].#subform[10].P10_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[10].P10_Line3b_Unit[2]}:APT, {form1[0].#subform[10].P10_Line3b_Unit[1]}:STE, {form1[0].#subform[10].P10_Line3b_Unit[0]}:FLR )+{form1[0].#subform[10].P10_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[10].P10_Line3c_CityOrTown[0]}|{form1[0].#subform[10].P10_Line3d_State[0]}|{form1[0].#subform[10].P10_Line3e_ZipCode[0]}|{form1[0].#subform[10].P10_Line3f_Province[0]}|{form1[0].#subform[10].P10_Line3g_PostalCode[0]}|{form1[0].#subform[10].P10_Line3h_Country[0]}|{form1[0].#subform[10].P10_Line4_PreparersDaytimePhoneNumber[0]}|{form1[0].#subform[10].P10_Line5_PreparersFaxNumber[0]}|{form1[0].#subform[10].P10_Line6_PreparersEmailAddress[0]}|&ifEqual({form1[0].#subform[10].P10_Line7_checkbox[0]}:on, A, )+&ifEqual({form1[0].#subform[10].P10_Line7_checkbox[1]}:on, B, )|&ifEqual({form1[0].#subform[10].P10_Line7_Extend[0]}:on, Y, )+&ifEqual({form1[0].#subform[10].P10_Line7_Extend[1]}:on, N, )|{form1[0].#subform[10].P10_Line8b_DateofSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			52 => 
			array (
				'id' => '53',
				'form_id' => '10',
				'page' => '12',
				'pdf_field_barcode' => 'form1[0].#subform[11].PaperFormsBarcode12[0]',
				'model' => 'I-864|07/02/15|12|{form1[0].#subform[11].P4_Line1a_FamilyName[1]}|{form1[0].#subform[11].P4_Line1b_GivenName[1]}|{form1[0].#subform[11].P4_Line1c_MiddleName[1]}|{form1[0].#subform[11].#area[19].P4_Line12_AlienNumber[1]}|{form1[0].#subform[11].P11_Line3a_PageNumber[0]}|{form1[0].#subform[11].P11_Line3b_PartNumber[0]}|{form1[0].#subform[11].P11_Line3c_ItemNumber[0]}|{form1[0].#subform[11].P11_Line3d_AdditionalInfo[0]}|{form1[0].#subform[11].P11_Line4a_PageNumber[0]}|{form1[0].#subform[11].P11_Line4b_PartNumber[0]}|{form1[0].#subform[11].P11_Line4c_ItemNumber[0]}|{form1[0].#subform[11].P11_Line4d_AdditionalInfo[0]}|{form1[0].#subform[11].P11_Line5a_PageNumber[0]}|{form1[0].#subform[11].P11_Line5b_PartNumber[0]}|{form1[0].#subform[11].P11_Line5c_ItemNumber[0]}|{form1[0].#subform[11].P11_Line5d_AdditionalInfo[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			53 => 
			array (
				'id' => '54',
				'form_id' => '19',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-90|06/30/15|1|{form1[0].#subform[0].#area[2].P1_Line1_AlienNumber[0]}|{form1[0].#subform[0].#area[1].P1_Line2_AcctIdentifier[0]}|{form1[0].#subform[0].P1_Line3a_FamilyName[0]}|{form1[0].#subform[0].P1_Line3b_GivenName[0]}|{form1[0].#subform[0].P1_Line3c_MiddleName[0]}|&ifEqual({form1[0].#subform[0].P1_checkbox4[0]}:on, Y, )+&ifEqual({form1[0].#subform[0].P1_checkbox4[1]}:on, N, )+&ifEqual({form1[0].#subform[0].P1_checkbox4[2]}:on, A, )|{form1[0].#subform[0].P1_Line5a_FamilyName[0]}|{form1[0].#subform[0].P1_Line5b_GivenName[0]}|{form1[0].#subform[0].P1_Line5b_GivenName[0]}|{form1[0].#subform[0].P1_Line6a_InCareofName[0]}|{form1[0].#subform[0].P1_Line6b_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[0].P1_checkbox6c_Unit[0]}:APT, {form1[0].#subform[0].P1_checkbox6c_Unit[1]}:STE, {form1[0].#subform[0].P1_checkbox6c_Unit[2]}:FLR )+{form1[0].#subform[0].P1_Line6c_AptSteFlrNumber[0]}|{form1[0].#subform[0].P1_Line6d_CityOrTown[0]}|{form1[0].#subform[0].P1_Line6e_State[0]}|{form1[0].#subform[0].P1_Line6f_ZipCode[0]}|{form1[0].#subform[0].P1_Line6g_Province[0]}|{form1[0].#subform[0].P1_Line6h_PostalCode[0]}|{form1[0].#subform[0].P1_Line6i_Country[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			54 => 
			array (
				'id' => '55',
				'form_id' => '19',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode2[0]',
			'model' => 'I-90|06/30/15|2|{form1[0].#subform[1].P1_Line7a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].P1_checkbox7b_Unit[0]}:APT, {form1[0].#subform[1].P1_checkbox7b_Unit[1]}:STE, {form1[0].#subform[1].P1_checkbox7b_Unit[2]}:FLR )+{form1[0].#subform[1].P1_Line7b_AptSteFlrNumber[0]}|{form1[0].#subform[1].P1_Line7c_CityOrTown[0]}|{form1[0].#subform[1].P1_Line7d_State[0]}|{form1[0].#subform[1].P1_Line7e_ZipCode[0]}|{form1[0].#subform[1].P1_Line7f_Province[0]}|{form1[0].#subform[1].P1_Line7g_PostalCode[0]}|{form1[0].#subform[1].P1_Line7h_Country[0]}|&ifEqual({form1[0].#subform[1].P1_Line8_male[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P1_Line8_female[0]}:on, Y, )|{form1[0].#subform[1].P1_Line9_DateOfBirth[0]}|{form1[0].#subform[1].P1_Line10_CityTownOfBirth[0]}|{form1[0].#subform[1].P1_Line11_CountryofBirth[0]}|{form1[0].#subform[1].P1_Line12_MotherGivenName[0]}|{form1[0].#subform[1].P1_Line13_FatherGivenName[0]}|{form1[0].#subform[1].P1_Line14_ClassOfAdmission[0]}|{form1[0].#subform[1].P1_Line15_DateOfAdmission[0]}|{form1[0].#subform[1].#area[3].P1_Line16_SSN[0]}|&ifEqual({form1[0].#subform[1].P2_checkbox1a[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox1b[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox1c[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2a[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2b[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2c[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2d[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2e[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2f[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2g1[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].P2_checkbox2g2[0]}:on, Y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			55 => 
			array (
				'id' => '56',
				'form_id' => '19',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode3[0]',
			'model' => 'I-90|06/30/15|3|&ifEqual({form1[0].#subform[2].P2_checkbox2h1[0]}:on, Y, )|{form1[0].#subform[2].P2_Line2h1_CityandState[0]}|&ifEqual({form1[0].#subform[2].P2_checkbox2h2[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox2i[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox2j[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox3a[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox3b[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox3c[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox3d[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].P2_checkbox3e[0]}:on, Y, )|{form1[0].#subform[2].P2_checkbox3e[0]}|{form1[0].#subform[2].P3_Line2_LocationIssuedVisa[0]}|{form1[0].#subform[2].P3_Line3a_Destination[0]}|{form1[0].#subform[2].P3_Line3a1_CityandState[0]}|&ifEqual({form1[0].#subform[2].P3_checkbox4[1]}:on, Y,N )|&ifEqual({form1[0].#subform[2].P3_checkbox5[1]}:on, Y,N )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			56 => 
			array (
				'id' => '57',
				'form_id' => '19',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode4[0]',
			'model' => 'I-90|06/30/15|4|&ifEqual({form1[0].#subform[3].P4_checkbox1[1]}:on, Y, )+&ifEqual({form1[0].#subform[3].P4_checkbox1[0]}:on, N, )|&ifEqual({form1[0].#subform[3].P4_checkbox1a[0]}:on, Y, )|{form1[0].#subform[3].P4_Line1a_AccomodationRequested[0]}|&ifEqual({form1[0].#subform[3].P4_checkbox1b[0]}:on, Y, )|{form1[0].#subform[3].P4_Line1b_AccomodationRequested[0]}|&ifEqual({form1[0].#subform[3].P4_checkbox1c[0]}:on, Y, )|{form1[0].#subform[3].P4_Line1c_AccomodationRequested[0]}|&ifEqual({form1[0].#subform[3].P5_Checkbox1a[0]}:on, Y, )|&ifEqual({form1[0].#subform[3].P5_Checkbox1b[0]}:on, Y, )|{form1[0].#subform[3].P5_Line1b_Language[0]}|&ifEqual({form1[0].#subform[3].P5_Checkbox2[0]}:on, Y, )|{form1[0].#subform[3].P5_Line2_NameofRepresentative[0]}|&ifEqual({form1[0].#subform[3].P5_Checkbox2_Who[0]}:on, Y, )+&ifEqual({form1[0].#subform[3].P5_Checkbox2_Who[1]}:on, N, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			57 => 
			array (
				'id' => '58',
				'form_id' => '19',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode5[0]',
				'model' => 'I-90|06/30/15|5|{form1[0].#subform[4].P5_Line3_DaytimePhoneNumber[0]}|{form1[0].#subform[4].P5_Line4_MobilePhoneNumber[0]}|{form1[0].#subform[4].P5_Line5_EmailAddress[0]}|{form1[0].#subform[4].P5_Name[0]}|{form1[0].#subform[4].P5_Line6b_DateofSignature[0]}|{form1[0].#subform[4].P6_Line1a_InterpretersFamilyName[0]}|{form1[0].#subform[4].P6_Line1b_InterpretersGivenName[0]}|{form1[0].#subform[4].P6_Line2_NameofBusinessor[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			58 => 
			array (
				'id' => '59',
				'form_id' => '19',
				'page' => '6',
				'pdf_field_barcode' => 'form1[0].#subform[5].PaperFormsBarcode5[1]',
			'model' => 'I-90|06/30/15|6|{form1[0].#subform[5].P6_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[5].P6_checkbox3b_Unit[0]}:APT, {form1[0].#subform[5].P6_checkbox3b_Unit[1]}:STE, {form1[0].#subform[5].P6_checkbox3b_Unit[2]}:FLR )+{form1[0].#subform[5].P6_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[5].P6_Line3c_CityTown[0]}|{form1[0].#subform[5].P6_Line3d_State[0]}|{form1[0].#subform[5].P6_Line3e_ZipCode[0]}|{form1[0].#subform[5].P6_Line3f_Province[0]}|{form1[0].#subform[5].P6_Line3g_PostalCode[0]}|{form1[0].#subform[5].P6_Line3h_Country[0]}|{form1[0].#subform[5].P6_Line4_InterpretersDaytimePhoneNumber[0]}|{form1[0].#subform[5].P6_Line5_InterpretersEmailAddress[0]}|{form1[0].#subform[5].P6_Language[0]}|{form1[0].#subform[5].P6_Line6b_DateofSignature[0]}|{form1[0].#subform[5].P7_Line1a_FamilyName[0]}|{form1[0].#subform[5].P7_Line1b_PreparersGivenName[0]}|{form1[0].#subform[5].P7_Line2_NameofBusinessor[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			59 => 
			array (
				'id' => '60',
				'form_id' => '19',
				'page' => '7',
				'pdf_field_barcode' => 'form1[0].#subform[6].PaperFormsBarcode6[0]',
			'model' => 'I-90|06/30/15|7|{form1[0].#subform[6].P7_Line3a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[6].P7_checkbox3b_Unit[0]}:APT, {form1[0].#subform[6].P7_checkbox3b_Unit[1]}:STE, {form1[0].#subform[6].P7_checkbox3b_Unit[2]}:FLR )+{form1[0].#subform[6].P7_Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[6].P7_Line3c_CityTown[0]}|{form1[0].#subform[6].P7_Line3d_State[0]}|{form1[0].#subform[6].P7_Line3e_ZipCode[0]}|{form1[0].#subform[6].P7_Line3f_Province[0]}|{form1[0].#subform[6].P7_Line3g_PostalCode[0]}|{form1[0].#subform[6].P7_Line3h_Country[0]}|{form1[0].#subform[6].P7_Line4_PreparersDaytimePhoneNumber[0]}|{form1[0].#subform[6].P7_Line5_PreparersFaxNumber[0]}|{form1[0].#subform[6].P7_Line6_PreparersEmailAddress[0]}|&ifEqual({form1[0].#subform[6].P7_checkbox7[0]}:on, A, )+&ifEqual({form1[0].#subform[6].P7_checkbox7[1]}:on, B, )|&ifEqual({form1[0].#subform[6].P7_checkbox7Extend[0]}:on, E, )+&ifEqual({form1[0].#subform[6].P7_checkbox7Extend[1]}:on, D, )|{form1[0].#subform[6].P7_Line8b_DateofSignature[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			60 => 
			array (
				'id' => '61',
				'form_id' => '19',
				'page' => '8',
				'pdf_field_barcode' => 'form1[0].#subform[7].PaperFormsBarcode8[0]',
				'model' => 'I-90|06/30/15|8|{form1[0].#subform[7].P1_Line3a_FamilyName[1]}|{form1[0].#subform[7].P1_Line3b_GivenName[1]}|{form1[0].#subform[7].P1_Line3c_MiddleName[1]}|{form1[0].#subform[7].#area[5].P1_Line1_AlienNumber[1]}|{form1[0].#subform[7].P8_Line3a_PageNumber[0]}|{form1[0].#subform[7].P8_Line3b_PartNumber[0]}|{form1[0].#subform[7].P8_Line3c_ItemNumber[0]}|{form1[0].#subform[7].P8_Line3d_AdditionalInfo[0]}|{form1[0].#subform[7].P8_Line4a_PageNumber[0]}|{form1[0].#subform[7].P8_Line4b_PartNumber[0]}|{form1[0].#subform[7].P8_Line4c_ItemNumber[0]}|{form1[0].#subform[7].P8_Line4d_AdditionalInfo[0]}|{form1[0].#subform[7].P8_Line5a_PageNumber[0]}|{form1[0].#subform[7].P8_Line5b_PartNumber[0]}|{form1[0].#subform[7].P8_Line5c_ItemNumber[0]}|{form1[0].#subform[7].P8_Line5d_AdditionalInfo[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			61 => 
			array (
				'id' => '62',
				'form_id' => '1000',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-131|01/22/16|1|&ifEqual({form1[0].#subform[0].G28_Attached[0]}:on, Y, )|{form1[0].#subform[0].Line1a_FamilyName[0]}|{form1[0].#subform[0].Line1b_GivenName[0]}|&ifEqual({form1[0].#subform[0].Line1c_MiddleName[0]}:N/A, ,{form1[0].#subform[0].Line1c_MiddleName[0]} )|{form1[0].#subform[0].Line2a_InCareofName[0]}|{form1[0].#subform[0].Line2b_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[0].Line2c_Unit[2]}:APT, {form1[0].#subform[0].Line2c_Unit[0]}:STE, {form1[0].#subform[0].Line2c_Unit[1]}:FLR )+{form1[0].#subform[0].Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[0].Line2d_CityOrTown[0]}|{form1[0].#subform[0].Line2e_State[0]}|{form1[0].#subform[0].Line2f_ZipCode[0]}|{form1[0].#subform[0].Line2g_PostalCode[0]}|{form1[0].#subform[0].Line2h_Province[0]}|{form1[0].#subform[0].Line2i_Country[0]}|{form1[0].#subform[0].#area[1].Line3_AlienNumber[0]}|{form1[0].#subform[0].Line4_CountryOfBirth[0]}|{form1[0].#subform[0].Line5_CountryOfCitizenship[0]}|{form1[0].#subform[0].Line6_ClassofAdmission[0]}|&ifEqual({form1[0].#subform[0].Line7_Male[0]}:on, Y, )|&ifEqual({form1[0].#subform[0].Line7_Female[0]}:on, Y, )|{form1[0].#subform[0].Line8_DateOfBirth[0]}|{form1[0].#subform[0].#area[2].Line9_SSN[0]}|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			62 => 
			array (
				'id' => '63',
				'form_id' => '1000',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode1[1]',
			'model' => 'I-131|01/22/16|2|&ifEqual({form1[0].#subform[1].Line1a_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1b_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1c_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1d_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1e_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1f_checkbox[0]}:on, Y, )|{form1[0].#subform[1].Line2a_FamilyName[0]}|{form1[0].#subform[1].Line2b_GivenName[0]}|&ifEqual({form1[0].#subform[1].Line2c_MiddleName[0]}:N/A, ,{form1[0].#subform[1].Line2c_MiddleName[0]} )|{form1[0].#subform[1].Line2d_DateOfBirth[0]}|{form1[0].#subform[1].Line2e_CountryOfBirth[0]}|{form1[0].#subform[1].Line2f_CountryOfCitizenship[0]}|{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber1[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber2[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber3[0]}|{form1[0].#subform[1].Line2h_InCareofName[0]}|{form1[0].#subform[1].Line2i_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].Line2j_Unit[2]}:APT, {form1[0].#subform[1].Line2j_Unit[0]}:STE, {form1[0].#subform[1].Line2j_Unit[1]}:FLR )+{form1[0].#subform[1].Line2j_AptSteFlrNumber[0]}|{form1[0].#subform[1].Line2k_CityOrTown[0]}|{form1[0].#subform[1].Line2l_State[0]}|{form1[0].#subform[1].Line2m_ZipCode[0]}|{form1[0].#subform[1].Line2n_PostalCode[0]}|{form1[0].#subform[1].Line2o_Province[0]}|{form1[0].#subform[1].Line2p_Country[0]}|{form1[0].#subform[1].Line1_DateIntendedDeparture[0]}|{form1[0].#subform[1].Line2_ExpectedLengthTrip[0]}|&ifEqual({form1[0].#subform[1].Line3a_Yes[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line4a_Yes[0]}:on, Y, )|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			63 => 
			array (
				'id' => '64',
				'form_id' => '1000',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode1[2]',
				'model' => 'I-131|01/22/16|3|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			64 => 
			array (
				'id' => '65',
				'form_id' => '1000',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode1[3]',
				'model' => 'I-131|01/22/16|4|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			65 => 
			array (
				'id' => '66',
				'form_id' => '1000',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode1[4]',
				'model' => 'I-131|01/22/16|5|',
				'created_at' => '2016-05-12 15:46:09',
				'updated_at' => '2016-05-12 15:46:09',
			),
			66 => 
			array (
				'id' => '68',
				'form_id' => '1015',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'G-28|05/05/16|1|{form1[0].#subform[0].#area[0].P1_L1_ELISAcctNumber[0]}|{form1[0].#subform[0].Line2b_GivenName[0]}|{form1[0].#subform[0].Line2a_FamilyName[0]}|&ifEqual({form1[0].#subform[0].Line2c_MiddleName[0]}:N/A,,{form1[0].#subform[0].Line2c_MiddleName[0]})|{form1[0].#subform[0].Line3a_StreetNumber[0]}+&checkBoxGroup({form1[0].#subform[0].Line3b_Unit[2]}:APT,{form1[0].#subform[0].Line3b_Unit[0]}:STE,{form1[0].#subform[0].Line3b_Unit[1]}:FLR)+{form1[0].#subform[0].Line3b_AptSteFlrNumber[0]}|{form1[0].#subform[0].Line3c_CityOrTown[0]}|{form1[0].#subform[0].Line3e_ZipCode[0]}|{form1[0].#subform[0].Line3f_Province[0]}|{form1[0].#subform[0].Line3g_PostalCode[0]}|{form1[0].#subform[0].Line3h_Country[0]}|{form1[0].#subform[0].Line4_DaytimeTelephoneNumber[0]}|{form1[0].#subform[0].Line5_FaxPhoneNumber[0]}|{form1[0].#subform[0].Line6_EMail[0]}|{form1[0].#subform[0].Line7_MobileTelephoneNumber[0]}|&ifEqual({form1[0].#subform[0].Line1a_USCIS[0]}:on,Y,)|{form1[0].#subform[0].Line1b_ListFormNumber[0]}|&ifEqual({form1[0].#subform[0].Line2a_ICE[0]}:on,Y,)|{form1[0].#subform[0].Line2b_ListMatter[0]}|&ifEqual({form1[0].#subform[0].Line3a_CBP[0]}:on,Y,)|{{form1[0].#subform[0].Line3b_ListSpecificMatter[0]}|&checkBoxGroup({form1[0].#subform[0].Line4_Checkbox[0]}:A, {form1[0].#subform[0].Line4_Checkbox[3]}:R,{form1[0].#subform[0].Line4_Checkbox[2]}:P,{form1[0].#subform[0].Line4_Checkbox[1]}:B)|{form1[0].#subform[0].Line5b_GivenName[0]}|{form1[0].#subform[0].Line5a_FamilyName[0]}|&ifEqual({form1[0].#subform[0].Line5c_MiddleName[0]}:N/A,,{form1[0].#subform[0].Line5c_MiddleName[0]})|{form1[0].#subform[0].Line6_NameOfCompany[0]}',
				'created_at' => '2016-08-20 18:00:34',
				'updated_at' => '2016-08-20 18:03:38',
			),
			67 => 
			array (
				'id' => '69',
				'form_id' => '1015',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode2[0]',
			'model' => 'G-28|05/05/16|2|{form1[0].#subform[1].#area[1].P2_L7_ELISAcctNumber[0]}|{form1[0].#subform[1].Line8_ReceiptNumber[0]}|{form1[0].#subform[1].Line9_DaytimeTelephoneNumber[0]}|{form1[0].#subform[1].Line10_MobileTelephoneNumber[0]}|{form1[0].#subform[1].Line11_EMail[0]}|{form1[0].#subform[1].Line12a_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].Line12b_Unit[2]}:APT, {form1[0].#subform[1].Line12b_Unit[0]}:STE, {form1[0].#subform[1].Line12b_Unit[1]}:FLR )+{form1[0].#subform[1].Line12b_AptSteFlrNumber[0]}|{form1[0].#subform[1].Line12c_CityOrTown[0]}|{form1[0].#subform[1].Line12d_State[0]}|{form1[0].#subform[1].Line12e_ZipCode[0]}|{form1[0].#subform[1].Line12f_Province[0]}|{form1[0].#subform[1].Line12g_PostalCode[0]}|{form1[0].#subform[1].Line12h_Country[0]}|&ifEqual({form1[0].#subform[1].CheckBox1[0]}:on, Y, )|{form1[0].#subform[1].Line1a_LicensingAuthority[0]}|{form1[0].#subform[1].Line1a_LicensingAuthority[0]}|{form1[0].#subform[1].Line1c_NameofLawFirm[0]}|&ifEqual({form1[0].#subform[1].Checkbox1dAmNot[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Checkbox1dAm[0]}:on, Y, )|{form1[0].#subform[1].Line1d_Explanation[0]}|&ifEqual({form1[0].#subform[1].CheckBox2[0]}:on, Y, )|{form1[0].#subform[1].Line2b_NameofOrganization[0]}|{form1[0].#subform[1].Line2c_DateExpires[0]}|',
				'created_at' => '2016-08-20 18:04:09',
				'updated_at' => '2016-08-20 18:04:09',
			),
			68 => 
			array (
				'id' => '70',
				'form_id' => '1015',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode3[0]',
			'model' => 'G-28|05/05/16|3|&ifEqual({}:on, Y, )|&ifEqual({checkbox_pdf_field_name}:on, Y, )|{form1[0].#subform[2].Line3_NameofAttorneyOrRep[0]}|&ifEqual({form1[0].#subform[2].CheckBox4[0]}:on, Y, )|{form1[0].#subform[2].Line4b_LawStudent[0]}|&ifEqual({form1[0].#subform[2].CheckBox2a[0]}:on, Y, )|&ifEqual({form1[0].#subform[2].CheckBox2b[0]}:on, Y, )|{form1[0].#subform[2].Line3b_Date[0]}|{form1[0].#subform[2].Line3_Date[0]}|',
				'created_at' => '2016-08-20 18:04:34',
				'updated_at' => '2016-08-20 18:04:34',
			),
			69 => 
			array (
				'id' => '71',
				'form_id' => '1015',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode3[1]',
				'model' => 'G-28|05/05/16|4|{form1[0].#subform[3].Line1_Explanation[0]}|',
				'created_at' => '2016-08-20 18:05:00',
				'updated_at' => '2016-08-20 18:05:00',
			),
			70 => 
			array (
				'id' => '72',
				'form_id' => '1024',
				'page' => '1',
				'pdf_field_barcode' => 'form1[0].#subform[0].PaperFormsBarcode1[0]',
			'model' => 'I-131|05/03/16|1|&ifEqual({form1[0].#subform[0].G28_Attached[0]}:on, Y, )|{form1[0].#subform[0].Line1a_FamilyName[0]}|{form1[0].#subform[0].Line1b_GivenName[0]}|&ifEqual({form1[0].#subform[0].Line1c_MiddleName[0]}:N/A, ,{form1[0].#subform[0].Line1c_MiddleName[0]} )|{form1[0].#subform[0].Line2a_InCareofName[0]}|{form1[0].#subform[0].Line2b_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[0].Line2c_Unit[2]}:APT, {form1[0].#subform[0].Line2c_Unit[0]}:STE, {form1[0].#subform[0].Line2c_Unit[1]}:FLR )+{form1[0].#subform[0].Line2c_AptSteFlrNumber[0]}|{form1[0].#subform[0].Line2d_CityOrTown[0]}|{form1[0].#subform[0].Line2e_State[0]}|{form1[0].#subform[0].Line2f_ZipCode[0]}|{form1[0].#subform[0].Line2g_PostalCode[0]}|{form1[0].#subform[0].Line2h_Province[0]}|{form1[0].#subform[0].Line2i_Country[0]}|{form1[0].#subform[0].#area[1].Line3_AlienNumber[0]}|{form1[0].#subform[0].Line4_CountryOfBirth[0]}|{form1[0].#subform[0].Line5_CountryOfCitizenship[0]}|{form1[0].#subform[0].Line6_ClassofAdmission[0]}|&ifEqual({form1[0].#subform[0].Line7_Male[0]}:on, Y, )|&ifEqual({form1[0].#subform[0].Line7_Female[0]}:on, Y, )|{form1[0].#subform[0].Line8_DateOfBirth[0]}|{form1[0].#subform[0].#area[2].Line9_SSN[0]}|',
				'created_at' => '2016-08-20 18:09:30',
				'updated_at' => '2016-08-20 18:10:36',
			),
			71 => 
			array (
				'id' => '73',
				'form_id' => '1024',
				'page' => '2',
				'pdf_field_barcode' => 'form1[0].#subform[1].PaperFormsBarcode1[1]',
			'model' => 'I-131|05/03/16|2|&ifEqual({form1[0].#subform[1].Line1a_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1b_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1c_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1d_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1e_checkbox[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line1f_checkbox[0]}:on, Y, )|{form1[0].#subform[1].Line2a_FamilyName[0]}|{form1[0].#subform[1].Line2b_GivenName[0]}|&ifEqual({form1[0].#subform[1].Line2c_MiddleName[0]}:N/A, ,{form1[0].#subform[1].Line2c_MiddleName[0]} )|{form1[0].#subform[1].Line2d_DateOfBirth[0]}|{form1[0].#subform[1].Line2e_CountryOfBirth[0]}|{form1[0].#subform[1].Line2f_CountryOfCitizenship[0]}|{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber1[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber2[0]}+{form1[0].#subform[1].#area[4].Line2g_DaytimePhoneNumber3[0]}|{form1[0].#subform[1].Line2h_InCareofName[0]}|{form1[0].#subform[1].Line2i_StreetNumberName[0]}|&checkBoxGroup({form1[0].#subform[1].Line2j_Unit[2]}:APT, {form1[0].#subform[1].Line2j_Unit[0]}:STE, {form1[0].#subform[1].Line2j_Unit[1]}:FLR )+{form1[0].#subform[1].Line2j_AptSteFlrNumber[0]}|{form1[0].#subform[1].Line2k_CityOrTown[0]}|{form1[0].#subform[1].Line2l_State[0]}|{form1[0].#subform[1].Line2m_ZipCode[0]}|{form1[0].#subform[1].Line2n_PostalCode[0]}|{form1[0].#subform[1].Line2o_Province[0]}|{form1[0].#subform[1].Line2p_Country[0]}|{form1[0].#subform[1].Line1_DateIntendedDeparture[0]}|{form1[0].#subform[1].Line2_ExpectedLengthTrip[0]}|&ifEqual({form1[0].#subform[1].Line3a_Yes[0]}:on, Y, )|&ifEqual({form1[0].#subform[1].Line4a_Yes[0]}:on, Y, )|',
				'created_at' => '2016-08-20 18:11:31',
				'updated_at' => '2016-08-20 18:11:31',
			),
			72 => 
			array (
				'id' => '74',
				'form_id' => '1024',
				'page' => '3',
				'pdf_field_barcode' => 'form1[0].#subform[2].PaperFormsBarcode1[2]',
				'model' => 'I-131|05/03/16|3|',
				'created_at' => '2016-08-20 18:11:54',
				'updated_at' => '2016-08-20 18:11:54',
			),
			73 => 
			array (
				'id' => '75',
				'form_id' => '1024',
				'page' => '4',
				'pdf_field_barcode' => 'form1[0].#subform[3].PaperFormsBarcode1[3]',
				'model' => 'I-131|05/03/16|4|',
				'created_at' => '2016-08-20 18:12:22',
				'updated_at' => '2016-08-20 18:12:22',
			),
			74 => 
			array (
				'id' => '76',
				'form_id' => '1024',
				'page' => '5',
				'pdf_field_barcode' => 'form1[0].#subform[4].PaperFormsBarcode1[4]',
				'model' => 'I-131|05/03/16|5|',
				'created_at' => '2016-08-20 18:12:38',
				'updated_at' => '2016-08-20 18:12:38',
			),
		));
	}

}
