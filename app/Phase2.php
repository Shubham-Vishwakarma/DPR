<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase2 extends Model
{
    //
    protected $table = 'phase2';

    protected $fillable = [
        'state_name',
        'district_name',
        'city_name',
        'project_name',
        'project_code',
        'nodal_agency',
        'implementing_agency',
        'implementing_agency_name',
        'approval_date',
        'housing',
        'infrastructure',
        'other',
        'total_project_cost',
        'gen',
        'sc',
        'st',
        'obc',
        'minority',
        'total_slum_household',
        'selected',
        'construction_cost',
        'project_duration',
        'sales_price',
        'carpet_area',
        'total_houses',
        'ews_unit',
        'lig_unit',
        'mig_unit',
        'hig_unit',
        'commercial_unit',
        'private_partner',
        'ews_eligible',
        'goi_grant',
        'state_grant',
        'land_grant',
        'cash_grant',
        'implementing_agency_share',
        'beneficiary_share',
        'total_share',
        'specifications',
        'trunk_infrastructure',
        'water_supply',
        'sewerage',
        'road',
        'storm_water',
        'electrification',
        'solid_waste',
        'other_civic',
        'reason',
        'social_infrastructure',
        'disaster',
        'quality',
        'o_m',
        'free_land',
        'innovative_tech',
        'comments',
        'project_brief',
        'submission_date'
    ];
}
