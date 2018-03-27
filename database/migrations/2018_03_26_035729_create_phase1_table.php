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
            $table->string('state_name');
            $table->string('city_name');
            $table->string('slum_name');
            $table->string('project_name');
            $table->string('project_code');
            $table->string('nodal_agency');
            $table->string('implementing_agency');
            $table->string('approval_date');
            $table->string('project_cost');
            $table->string('project_duration');
            $table->string('slum_status');
            $table->string('total_slum_area');
            $table->string('rehabilitation_area');
            $table->string('slum_population');
            $table->string('gen');
            $table->string('sc');
            $table->string('st');
            $table->string('obc');
            $table->string('minority');
            $table->string('total_slum_household');
            $table->string('eligible_slum');
            $table->string('houses_proposed');
            $table->string('selected_PMAY');
            $table->string('private_partner_selected');
            $table->string('incentive_private_partner');
            $table->string('existing_fsi');
            $table->string('provided_fsi');
            $table->string('other_incentives');
            $table->string('goi_grant');
            $table->string('state_grant');
            $table->string('ulb_grant');
            $table->string('beneficiary_share');
            $table->string('total_grant');
            $table->string('specifications');
            $table->string('temporary');
            $table->string('trunk_infrastructure');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water_drain');
            $table->string('electrification');
            $table->string('solid_waste');
            $table->string('other_infrastructure');
            $table->string('reasons');
            $table->string('disaster');
            $table->string('quality');
            $table->string('o_and_m');
            $table->string('encumbrance');
            $table->string('innovative');
            $table->string('slac_comments');
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
