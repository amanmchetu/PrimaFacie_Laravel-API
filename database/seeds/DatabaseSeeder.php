<?php

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eloquent::unguard();

        
		$this->call('FormsTableSeeder');
		$this->call('BarcodeTemplatesTableSeeder');
		$this->call('CaseChecklistsTemplatesTableSeeder');
		$this->call('CaseFlowsTemplatesTableSeeder');
		$this->call('CaseStatusTableSeeder');
		$this->call('CaseTypesTableSeeder');
		$this->call('ContactsLogsTableSeeder');
		$this->call('ContactsRolesTableSeeder');
		$this->call('CustomFieldsModulesTableSeeder');
		$this->call('CustomFieldsTypesTableSeeder');
		$this->call('FormsCaseTypeTableSeeder');
		$this->call('FormsCasesTableSeeder');
		$this->call('FormsRolesTypesTableSeeder');
		$this->call('FormsStatusTableSeeder');
		$this->call('PaymentTypesTableSeeder');
		$this->call('PhoneTypesTableSeeder');
		$this->call('PrecticeAreasTableSeeder');
		$this->call('PrimaModelsTableSeeder');
		$this->call('TaskPriorityTableSeeder');
		$this->call('TaskStatusTableSeeder');
		$this->call('TemplateDetailsTableSeeder');
		$this->call('TemplatesTableSeeder');
	}

}
