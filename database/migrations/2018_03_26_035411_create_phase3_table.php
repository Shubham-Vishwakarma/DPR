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
            $table->string('nodal_agency');
            $table->string('implementing_agency');
            $table->string('implementing_agency_name');
            $table->string('project_cost');
            $table->string('gen');
            $table->string('sc');
            $table->string('st');
            $table->string('obc');
            $table->string('minority');
            $table->string('total_slum_household');
            $table->string('construct_gen');
            $table->string('construct_sc');
            $table->string('construct_st');
            $table->string('construct_obc');
            $table->string('construct_minority');
            $table->string('construct_total_slum_household');
            $table->string('enhancement_gen');
            $table->string('enhancement_sc');
            $table->string('enhancement_st');
            $table->string('enhancement_obc');
            $table->string('enhancement_minority');
            $table->string('enhancement_total_slum_household');
            $table->string('selected_PMAY');
            $table->string('ownership');
            $table->string('approved');
            $table->string('goi_grant');
            $table->string('state_grant');
            $table->string('ulb_grant');
            $table->string('beneficiary_share');
            $table->string('total_grant');
            $table->string('specifications');
            $table->string('balance_cost');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water_drain');
            $table->string('electrification');
            $table->string('solid_waste');
            $table->string('other_infrastructure');
            $table->string('reasons');
            $table->string('disaster');
            $table->string('survey');
            $table->string('city_wide');
            $table->string('secc');
            $table->string('dbt');
            $table->string('tracking');
            $table->string('innovative');
            $table->string('slac_comments');
            $table->string('project_brief');
            $table->string('submission_date');
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
