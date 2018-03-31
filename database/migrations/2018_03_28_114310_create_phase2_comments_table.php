<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase2CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase2_comments', function (Blueprint $table) {
            $table->integer('id');
			      $table->string('state_name')->nullable();
            $table->string('district_name')->nullable();
            $table->string('city_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('nodal_agency')->nullable();
            $table->string('implementing_agency')->nullable();
            $table->string('implementing_agency_name')->nullable();
            $table->string('approval_date')->nullable();
            $table->string('housing')->nullable();
            $table->string('infrastructure')->nullable();
            $table->string('other')->nullable();
            $table->string('total_project_cost')->nullable();
            $table->string('gen')->nullable();
            $table->string('sc')->nullable();
            $table->string('st')->nullable();
            $table->string('obc')->nullable();
            $table->string('minority')->nullable();
            $table->string('total_slum_household')->nullable();
            $table->string('selected')->nullable();
            $table->string('construction_cost')->nullable();
            $table->string('project_duration')->nullable();
            $table->string('sales_price')->nullable();
            $table->string('carpet_area')->nullable();
            $table->string('total_houses')->nullable();
            $table->string('ews_unit')->nullable();
            $table->string('lig_unit')->nullable();
            $table->string('mig_unit')->nullable();
            $table->string('hig_unit')->nullable();
            $table->string('commercial_unit')->nullable();
            $table->string('private_partner')->nullable();
            $table->string('ews_eligible')->nullable();
            $table->string('goi_grant')->nullable();
            $table->string('state_grant')->nullable();
            $table->string('land_grant')->nullable();
            $table->string('cash_grant')->nullable();
            $table->string('implementing_agency_share')->nullable();
            $table->string('beneficiary_share')->nullable();
            $table->string('total_share')->nullable();
            $table->string('specifications')->nullable();
            $table->string('trunk_infrastructure')->nullable();
            $table->string('water_supply')->nullable();
            $table->string('sewerage')->nullable();
            $table->string('road')->nullable();
            $table->string('storm_water')->nullable();
            $table->string('electrification')->nullable();
            $table->string('solid_waste')->nullable();
            $table->string('other_civic')->nullable();
            $table->string('reason')->nullable();
            $table->string('social_infrastructure')->nullable();
            $table->string('disaster')->nullable();
            $table->string('quality')->nullable();
            $table->string('o_m')->nullable();
            $table->string('encumbrance')->nullable();
            $table->string('innovative')->nullable();
            $table->string('slac_comments')->nullable();
            $table->string('brief')->nullable();
            $table->string('submission_date')->nullable();
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
        Schema::dropIfExists('phase2_comments');
    }
}
