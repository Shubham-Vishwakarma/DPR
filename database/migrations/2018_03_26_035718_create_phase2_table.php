<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase2', function (Blueprint $table) {
            $table->increments('id');
            $table->string('state_name');
            $table->string('district_name');
            $table->string('city_name');
            $table->string('project_name');
            $table->string('project_code');
            $table->string('nodal_agency');
            $table->string('implementing_agency');
            $table->string('implementing_agency_name');
            $table->string('approval_date');
            $table->string('housing');
            $table->string('infrastructure');
            $table->string('other');
            $table->string('total_project_cost');
            $table->string('gen');
            $table->string('sc');
            $table->string('st');
            $table->string('obc');
            $table->string('minority');
            $table->string('total_slum_household');
            $table->string('selected');
            $table->string('construction_cost');
            $table->string('duration');
            $table->string('sales');
            $table->string('carpet_area');
            $table->string('total_project');
            $table->string('ews');
            $table->string('lig');
            $table->string('mig');
            $table->string('hig');
            $table->string('commerical');
            $table->string('procedure');
            $table->string('ews_eligible');
            $table->string('goi_grant');
            $table->string('state_grant');
            $table->string('land_grant');
            $table->string('cash_grant');
            $table->string('implementing_share');
            $table->string('beneficiary_share');
            $table->string('total_share');
            $table->string('specifications');
            $table->string('trunk_infra');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water');
            $table->string('electrification');
            $table->string('solid_waste');
            $table->string('other_civic');
            $table->string('reason');
            $table->string('social_infra');
            $table->string('disaster');
            $table->string('quality');
            $table->string('o_and_m');
            $table->string('encumbrance');
            $table->string('innovative');
            $table->string('comments');
            $table->string('project_brief');
            $table->string('submission_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('phase2');
    }
}
