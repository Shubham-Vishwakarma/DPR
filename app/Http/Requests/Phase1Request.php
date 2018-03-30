<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Phase1Request extends FormRequest
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
            'slum_name' => 'required',
            'project_name' => 'required',
            'project_code' => 'required',
            'nodal_agency' => 'required',
            'implementing_agency' => 'required',
            'agency_name' => 'required',
            'approval_date' => 'required',
            'project_cost' => 'required',
            'project_duration' => 'required',
            'slum_status' => 'required',
            'total_slum_area' => 'required',
            'rehabilitation_area' => 'required',
            'slum_population' => 'required',
            'gen' => 'required',
            'sc' => 'required',
            'st' => 'required',
            'obc' => 'required',
            'minority' => 'required',
            'gen_eli' => 'required',
            'sc_eli' => 'required',
            'st_eli' => 'required',
            'obc_eli' => 'required',
            'minority_eli' => 'required',
            'total_slum_household_eli' => 'required',
            'houses_proposed' => 'required',
            'selected_PMAY' => 'required',
            'private_partner_selected' => 'required',
            'existing_fsi' => 'required',
            'provided_fsi' => 'required',
            'other_incentives' => 'required',
            'goi_grant' => 'required',
            'state_grant' => 'required',
            'ulb_grant' => 'required',
            'beneficiary_share' => 'required',
            'total_grant' => 'required',
            'specifications' => 'required',
            'temporary' => 'required',
            'trunk_infrastructure' => 'required',
            'water_supply' => 'required',
            'sewerage' => 'required',
            'road' => 'required',
            'storm_water_drain' => 'required',
            'electrification' => 'required',
            'solid_waste' => 'required',
            'other_infrastructure' => 'required',
            'reasons' => 'required',
            'disaster' => 'required',
            'quality' => 'required',
            'o_and_m' => 'required',
            'encumbrance' => 'required',
            'innovative' => 'required',
            'slac_comments' => 'required',
            'project_brief' => 'required',
            'sub_date' => 'required',
        ];
    }
}
