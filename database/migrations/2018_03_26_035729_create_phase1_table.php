<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase1', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('state');
            $table->string('city');
            $table->string('slum_name');
            $table->string('project_name');
            $table->string('project_code');
            $table->string('state_level_nodal_agency');
            $table->string('implementing_agency');
            $table->string('date_of_approval');
            $table->string('project_cost');
            $table->string('project_duration');
            $table->string('status_of_slum ');
            $table->string('total_slum_area');
            $table->string('area_rehabilitation');
            $table->string('slum_pop');
            $table->string('slum_household_gen');
            $table->string('slum_household_sc');
            $table->string('slum_household_st');
            $table->string('slum_household_obc');
            $table->string('slum_household_minority');
            $table->string('slum_household_tot');
            $table->string('no_eligible_slum_households');
            $table->string('no_house_proposed');
            $table->string('beneficiary_yes_no');
            $table->string('date_bind');
            $table->string('Incentives_Private_Partner');
            $table->string('Existing_FSI_in_the_area');
            $table->string('FSI_provided_project');
            $table->string('Other_Incentives_if_any');
            $table->string('goi_grant');
            $table->string('state_grant');
            $table->string('ulb_grant');
            $table->string('beneficiary_share');
            $table->string('total');
            $table->string('technical_specification');
            $table->string('type_of_temporary_arrangement');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water');
            $table->string('external_electrification');
            $table->string('solid_waste_management');
            $table->string('Any_other_specify');
            $table->string('any_infrastructure_not_proposed');
            $table->string('disaster');
            $table->string('quality_assurance');
            $table->string('O&M_is_part');
            $table->string('free_land');
            $table->string('innovative');
            $table->string('comments');
            $table->string('project_brief');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phase1');
    }
}
