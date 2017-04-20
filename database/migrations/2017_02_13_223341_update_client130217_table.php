<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateClient130217Table extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function ($table) {

            $table->string('company_irs_tax_id', 250)->nullable();
            $table->string('company_business_type', 250)->nullable();
            $table->string('company_naics', 250)->nullable();
            $table->string('company_year_established', 250)->nullable();
            $table->string('company_total_number_employees', 250)->nullable();
            $table->string('company_us_number_employees', 250)->nullable();
            $table->string('company_gross_annual_income', 250)->nullable();
            $table->string('company_net_annual_income', 250)->nullable();
            $table->string('is_company', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contacts', function ($table) {
            $table->dropColumn('company_irs_tax_id');
            $table->dropColumn('company_business_type');
            $table->dropColumn('company_naics');
            $table->dropColumn('company_year_established');
            $table->dropColumn('company_total_number_employees');
            $table->dropColumn('company_us_number_employees');
            $table->dropColumn('company_gross_annual_income');
            $table->dropColumn('company_net_annual_income');
            $table->dropColumn('is_company');
        });
    }

}
