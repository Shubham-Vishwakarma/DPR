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
        'nodal_agency',
        'implementing_agency',
        'implementing_agency_name',
        'project_cost',
        'gen',
        'sc',
        'st',
        'obc',
        'minority'
        'total_slum_household',
        'construct_gen',
        'construct_sc',
        'construct_st',
        'construct_obc',
        'construct_minority',
        'construct_total_slum_household',
        'enhancement_gen',
        'enhancement_sc',
        'enhancement_st',
        'enhancement_obc',
        'enhancement_minority',
        'enhancement_total_slum_household',
        'selected_PMAY',
        'ownership',
        'approved',
        'goi_grant',
        'state_grant',
        'ulb_grant',
        'beneficiary_share',
        'total_grant',
        'specifications',
        'balance_cost',
        'water_supply',
        'sewerage',
        'road',
        'storm_water_drain',
        'electrification',
        'solid_waste',
        'other_infrastructure',
        'reasons',
        'disaster',
        'survey',
        'city_wide',
        'secc',
        'dbt',
        'tracking',
        'innovative',
        'slac_comments',
        'project_brief',
        'submission_date'
    ];

    protected $table = 'phase3';
}
