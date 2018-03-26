<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase3Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase3', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_name');
            $table->string('district_name');
            $table->string('city_name');
            $table->string('project_name');
            $table->string('project_code');
            $table->string('state_level_nodal_agency');
            $table->string('implementing_agency');
            $table->string('implementing_agency_name');
            $table->string('project_cost');
            $table->string('gen');
            $table->string('sc');
            $table->string('st');
            $table->string('obc');
            $table->string('minority');
            $table->string('total_beneficiaries');
            $table->string('new_construction');
            $table->string('enhancement');
            $table->string('pmay_guidelines');
            $table->string('rightful_ownership');
            $table->string('building_plan');
            $table->string('gol_grant');
            $table->string('ulb_grant');
            $table->string('beneficiary_share');
            $table->string('total_grant');
            $table->string('tech_specs');
            $table->string('balance_cost');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water');
            $table->string('external_electrification');
            $table->string('solid_waste');
            $table->string('other_specs');
            $table->string('reasons');
            $table->string('disaster');
            $table->string('demand_survey');
            $table->string('city_wide');
            $table->string('secc_data');
            $table->string('dbt');
            $table->string('geotagged_photographs');
            $table->string('innovative_tech');
            $table->string('comments_slac');
            $table->string('project_brief');
            $table->string('sub_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phase3');
    }
}
