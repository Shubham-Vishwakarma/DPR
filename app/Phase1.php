<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase1 extends Model
{
    protected $table = 'phase1';
    public $timestamps = false;
  protected $fillable = [
    'state_name',
    'city_name',
    'slum_name',
    'project_name',
    'project_code',
    'nodal_agency',
    'implementing_agency',
    'approval_date',
    'project_cost',
    'project_duration',
    'slum_status',
    'total_slum_area',
    'rehabilitation_area',
    'slum_population',
    'gen',
    'sc',
    'st',
    'obc',
    'minority',
    'total_slum_household',
    'eligible_slum',
    'houses_proposed',
    'selected_PMAY',
    'private_partner_selected',
    'incentive_private_partner',
    'existing_fsi',
    'provided_fsi',
    'other_incentives',
    'goi_grant',
    'state_grant',
    'ulb_grant',
    'beneficiary_share',
    'total_grant',
    'specifications',
    'temporary',
    'trunk_infrastructure',
    'water_supply',
    'sewerage',
    'road',
    'storm_water_drain',
    'electrification',
    'solid_waste',
    'other_infrastructure',
    'reasons',
    'disaster',
    'quality',
    'o_and_m',
    'encumbrance',
    'innovative',
    'slac_comments',
    'project_brief'
  ];

}
