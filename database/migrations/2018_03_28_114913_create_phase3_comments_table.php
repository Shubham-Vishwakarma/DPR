<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhase3CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phase3_comments', function (Blueprint $table) {
            $table->integer('id')->nullable();
			      $table->string('state_name')->nullable();
            $table->string('district_name')->nullable();
            $table->string('city_name')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_code')->nullable();
            $table->string('nodal_agency')->nullable();
            $table->string('implementing_agency')->nullable();
            $table->string('implementing_agency_name')->nullable();
            $table->string('project_cost')->nullable();
            $table->string('table_bene_covered')->nullable();
            $table->string('table_bene_new')->nullable();
            $table->string('table_bene_enhance')->nullable();
            $table->string('selected_PMAY')->nullable();
            $table->string('ownership')->nullable();
            $table->string('approved')->nullable();
            $table->string('goi_grant')->nullable();
            $table->string('state_grant')->nullable();
            $table->string('ulb_grant')->nullable();
            $table->string('beneficiary_share')->nullable();
            $table->string('total_grant')->nullable();
            $table->string('specification')->nullable();
            $table->string('balance_cost')->nullable();
            $table->string('water_supply')->nullable();
            $table->string('sewerage')->nullable();
            $table->string('road')->nullable();
            $table->string('storm_water_drain')->nullable();
            $table->string('electrification')->nullable();
            $table->string('solid_waste')->nullable();
            $table->string('other_infrastructure')->nullable();
            $table->string('reasons')->nullable();
            $table->string('disaster')->nullable();
            $table->string('survey')->nullable();
            $table->string('city_wide')->nullable();
            $table->string('secc')->nullable();
            $table->string('dbt')->nullable();
            $table->string('tracking')->nullable();
            $table->string('innovative')->nullable();
            $table->string('slac_comments')->nullable();
            $table->string('project_brief')->nullable();
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
        Schema::dropIfExists('phase3_comments');
    }
}
