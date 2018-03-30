<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Phase3Request extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'state_name' => 'required',
            'district_name' => 'required',
            'city_name' => 'required',
            'project_name' => 'required',
            'project_code' => 'required',
            'nodal_agency' => 'required',
            'implementing_agency' => 'required',
            'implementing_agency_name' => 'required',
            'project_cost' => 'required',
            'gen' => 'required',
            'sc' => 'required',
            'st' => 'required',
            'obc' => 'required',
            'minority' => 'required',
            'total_slum_household' => 'required',
            'construct_gen' => 'required',
            'construct_sc' => 'required',
            'construct_st' => 'required',
            'construct_obc' => 'required',
            'construct_minority' => 'required',
            'construct_total_slum_household' => 'required',
            'enhancement_gen' => 'required',
            'enhancement_sc' => 'required',
            'enhancement_st' => 'required',
            'enhancement_obc' => 'required',
            'enhancement_minority' => 'required',
            'enhancement_total_slum_household' => 'required',
            'selected_PMAY' => 'required',
            'ownership' => 'required',
            'approved' => 'required',
            'goi_grant' => 'required',
            'state_grant' => 'required',
            'ulb_grant' => 'required',
            'beneficiary_share' => 'required',
            'total_grant' => 'required',
            'specifications' => 'required',
            'balance_cost' => 'required',
            'water_supply' => 'required',
            'sewerage' => 'required',
            'road' => 'required',
            'storm_water_drain' => 'required',
            'electrification' => 'required',
            'solid_waste' => 'required',
            'other_infrastructure' => 'required',
            'reasons' => 'required',
            'disaster' => 'required',
            'survey' => 'required',
            'city_wide' => 'required',
            'secc' => 'required',
            'dbt' => 'required',
            'tracking' => 'required',
            'innovative' => 'required',
            'slac_comments' => 'required',
            'project_brief' => 'required',
            'submission_date' => 'required',
        ];
    }
}
