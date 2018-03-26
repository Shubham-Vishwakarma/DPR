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
'duration',
'sales',
'carpet_area',
'total_project',
'ews',
'lig',
'mig',
'hig',
'commerical',
'procedure',
'ews_eligible',
'goi_grant',
'state_grant',
'land_grant',
'cash_grant',
'implementing_share',
'beneficiary_share',
'total_share',
'specifications',
'trunk_infra',
'water_supply',
'sewerage',
'road',
'storm_water',
'electrification',
'solid_waste',
'other_civic',
'reason',
'social_infra',
'disaster',
'quality',
'o_and_m',
'encumbrance',
'innovative',
'comments',
'project_brief',
'submission_date'
    ];
}
