<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase3 extends Model
{
    protected $fillable = [
        'id',
        'state_name',
        'district_name',
        'city_name',
        'project_name',
        'project_code',
        'state_level_nodal_agency',
        'implementing_agency',
        'implementing_agency_name',
        'project_cost',
        'gen',
        'sc',
        'st',
        'total_beneficiaries',
        'new_construction',
        'enhancement',
        'pmay_guidelines',
        'building_plan',
        'gol_grant',
        'ulb_grant',
        'beneficiary_share',
        'total_grant',
        'tech_specs',
        'water_supply',
        'sewerage',
        'road',
        'storm_water',
        'external_electrification',
        'solid_waste',
        'other_specs',
        'reasons',
        'demand_survey',
        'city_wide',
        'secc_data',
        'dbt',
        'geotagged_photographs',
        'innovative_tech',
        'comments_slac',
        'project_brief',
        'sub_date'
    ];

    protected $table = 'phase3';
}
