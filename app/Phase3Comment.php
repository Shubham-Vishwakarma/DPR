<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phase3Comment extends Model
{
    protected $table = 'phase3_comments';


    protected $fillable = [
      'id',
        'phase3_id',
      'state_name',
      'district_name',
      'city_name',
      'project_name',
      'project_code',
      'nodal_agency',
      'implementing_agency',
      'implementing_agency_name',
      'project_cost',
      'table_bene_covered',
      'table_bene_new',
      'table_bene_enhance',
      'selected_PMAY',
      'ownership',
      'approved',
      'goi_grant',
      'state_grant',
      'ulb_grant',
      'beneficiary_share',
      'total_grant',
      'specification',
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
}
