<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase1CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase1_comments', function (Blueprint $table) {
            $table->increments('id')->nullable();
            $table->integer('phase1_id')->nullable();
            $table->string('state_name')->nullable();
            $table->string('district_name')->nullable();
            $table->string('city_name')->nullable();
            $table->string('slum_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('nodal_agency')->nullable();
            $table->string('implementing_agency')->nullable();
            $table->string('agency_name')->nullable();
            $table->string('approval_date')->nullable();
            $table->string('project_cost')->nullable();
            $table->string('project_duration')->nullable();
            $table->string('slum_status')->nullable();
            $table->string('total_slum_area')->nullable();
            $table->string('rehabilitation_area')->nullable();
            $table->string('slum_population')->nullable();
            $table->string('gen')->nullable();
            $table->string('sc')->nullable();
            $table->string('st')->nullable();
            $table->string('obc')->nullable();
            $table->string('minority')->nullable();
            $table->string('gen_eli')->nullable();
            $table->string('sc_eli')->nullable();
            $table->string('st_eli')->nullable();
            $table->string('obc_eli')->nullable();
            $table->string('minority_eli')->nullable();
            $table->string('total_slum_household_eli')->nullable();
            $table->string('houses_proposed')->nullable();
            $table->string('selected_PMAY')->nullable();
            $table->string('private_partner_selected')->nullable();
            $table->string('existing_fsi')->nullable();
            $table->string('provided_fsi')->nullable();
            $table->string('other_incentives')->nullable();
            $table->string('goi_grant')->nullable();
            $table->string('state_grant')->nullable();
            $table->string('ulb_grant')->nullable();
            $table->string('beneficiary_share')->nullable();
            $table->string('total_grant')->nullable();
            $table->string('specifications')->nullable();
            $table->string('temporary')->nullable();
            $table->string('trunk_infrastructure')->nullable();
            $table->string('water_supply')->nullable();
            $table->string('sewerage')->nullable();
            $table->string('road')->nullable();
            $table->string('storm_water_drain')->nullable();
            $table->string('electrification')->nullable();
            $table->string('solid_waste')->nullable();
            $table->string('other_infrastructure')->nullable();
            $table->string('reasons')->nullable();
            $table->string('disaster')->nullable();
            $table->string('quality')->nullable();
            $table->string('o_and_m')->nullable();
            $table->string('encumbrance')->nullable();
            $table->string('innovative')->nullable();
            $table->string('slac_comments')->nullable();
            $table->string('project_brief')->nullable();
            $table->string('sub_date')->nullable();
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
        Schema::dropIfExists('phase1_comments');
    }
}
