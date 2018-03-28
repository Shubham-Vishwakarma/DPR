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
            $table->string('project_duration');
            $table->string('sales_price');
            $table->string('carpet_area');
            $table->string('total_houses');
            $table->string('ews_unit');
            $table->string('lig_unit');
            $table->string('mig_unit');
            $table->string('hig_unit');
            $table->string('commercial_unit');
            $table->string('private_partner');
            $table->string('ews_eligible');
            $table->string('goi_grant');
            $table->string('state_grant');
            $table->string('land_grant');
            $table->string('cash_grant');
            $table->string('implementing_agency_share');
            $table->string('beneficiary_share');
            $table->string('total_share');
            $table->string('specifications');
            $table->string('trunk_infrastructure');
            $table->string('water_supply');
            $table->string('sewerage');
            $table->string('road');
            $table->string('storm_water');
            $table->string('electrification');
            $table->string('solid_waste');
            $table->string('other_civic');
            $table->string('reason');
            $table->string('social_infrastructure');
            $table->string('disaster');
            $table->string('quality');
            $table->string('o_m');
            $table->string('encumbrance');
            $table->string('innovative');
            $table->string('slac_comments');
            $table->string('brief');
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
