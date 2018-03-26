<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase1 extends Model
{
  protected $fillable = [
    'state',
    'city',
    'slum_name',
    'project_name',
    'project_code',
    'state_level_nodal_agency',
    'implementing_agency',
    'date_of_approval',
    'project_cost',
    'project_duration',
    'status_of_slum ',
    'total_slum_area',
    'area_rehabilitation',
    'slum_pop',
    'slum_household_gen',
    'slum_household_sc',
    'slum_household_st',
    'slum_household_obc',
    'slum_household_minority',
    'slum_household_tot',
    'no_eligible_slum_households',
    'no_house_proposed',
    'beneficiary_yes_no',
    'date_bind',
    'Incentives_Private_Partner',
    'Existing_FSI_in_the_area',
    'FSI_provided_project',
    'Other_Incentives_if_any',
    'goi_grant',
    'state_grant',
    'ulb_grant',
    'beneficiary_share',
    'total',
    'technical_specification',
    'type_of_temporary_arrangement',
    'water_supply',
    'sewerage',
    'road',
    'storm_water',
    'external_electrification',
    'solid_waste_management',
    'Any_other_specify',
    'any_infrastructure_not_proposed',
    'disaster',
    'quality_assurance',
    'O&M_is_part',
    'free_land',
    'innovative',
    'comments',
    'project_brief'

  ];

}
