<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Phase 2</title>
    </head>

    <body>
        <div align="center">
            <h1>Affordable Housing in Partnership Format</h1>
        </div>

        <div class="container">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <form class="form-horizontal" method="POST" action="{{ route('implementing_phase2') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('state_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="state_name" class="control-label">Name of the State</label>
                        </div>
                        <div class="col-md-8">
                            <input id="state_name" type="text" class="form-control" name="state_name" value="{{ old('state_name') }}" required autofocus>

                            @if ($errors->has('state_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('state_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('district_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="district_name" class="control-label">Name of the District</label>
                        </div>
                        <div class="col-md-8">
                            <input id="district_name" type="text" class="form-control" name="district_name" value="{{ old('district_name') }}" required>

                            @if ($errors->has('district_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('district_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('city_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="city_name" class="control-label">Name of the City</label>
                        </div>
                        <div class="col-md-8">
                            <input id="city_name" type="text" class="form-control" name="city_name" value="{{ old('city_name') }}" required>

                            @if ($errors->has('city_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('city_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_name" class="control-label">Project Name</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_name" type="text" class="form-control" name="project_name" value="{{ old('project_name') }}" required>

                            @if ($errors->has('project_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_code') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_code" class="control-label">Project Code</label>
                        </div>
                        <div class="col-md-8">
                            <input id="project_code" type="text" class="form-control" name="project_code" value="{{ old('project_code') }}" required>

                            @if ($errors->has('project_code'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('slum_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('nodal_agency') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="nodal_agency" class="control-label">State Level Nodal Agency</label>
                        </div>
                        <div class="col-md-8">
                            <input id="nodal_agency" type="text" class="form-control" name="nodal_agency" value="{{ old('nodal_agency') }}" required>

                            @if ($errors->has('nodal_agency'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('nodal_agency') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('implementing_agency') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="implementing_agency" class="control-label">Implementing Agency (Urban</label>
                            <label for="implementing_agency" class="control-label">Local Body/ Development</label>
                            <label for="implementing_agency" class="control-label">Authority/ Housing Board/Urban</label>
                            <label for="implementing_agency" class="control-label">Improvement Trust/ Designated</label>
                            <label for="implementing_agency" class="control-label">Slum Rehabilitation Agency/</label>
                            <label for="implementing_agency" class="control-label">Private agency/ Developer)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="implementing_agency" type="text" class="form-control" name="implementing_agency" value="{{ old('implementing_agency') }}" required>

                            @if ($errors->has('implementing_agency'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('implementing_agency_name') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="implementing_agency_name" class="control-label">Implementing Agency Name</label>
                        </div>
                        <div class="col-md-8">
                            <input id="implementing_agency_name" type="text" class="form-control" name="implementing_agency_name" value="{{ old('implementing_agency_name') }}" required>

                            @if ($errors->has('implementing_agency_name'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency_name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('approval_date') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="approval_date" class="control-label">Date of approval by State Level</label>
                            <label for="approval_date" class="control-label">Sanctioning and Monitoring</label>
                            <label for="approval_date" class="control-label">Committee (SLSMC)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="approval_date" type="text" class="form-control" name="approval_date" value="{{ old('approval_date') }}" required>

                            @if ($errors->has('approval_date'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('approval_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4" align="left">
                            <label class="control-label">Project Cost(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="row" align="center">
                                        <label for="housing" class="control-label">Housing</label>
                                    </div>
                                    <div class="row">
                                        <input id="housing" type="text" class="form-control" name="housing" value="{{ old('housing') }}" required>

                                        @if ($errors->has('housing'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('housing') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row" align="center">
                                        <label for="infrastructure" class="control-label">Infrastucture</label>
                                    </div>
                                    <div class="row">
                                        <input id="infrastructure" type="text" class="form-control" name="infrastructure" value="{{ old('infrastructure') }}" required>

                                        @if ($errors->has('infrastructure'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('infrastructure') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row" align="center">
                                        <label for="other" class="control-label">Other</label>
                                    </div>
                                    <div class="row">
                                        <input id="other" type="text" class="form-control" name="other" value="{{ old('other') }}" required>

                                        @if ($errors->has('other'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('other') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="row" align="center">
                                        <label for="total_project_cost" class="control-label">Total</label>
                                    </div>
                                    <div class="row">
                                        <input id="total_project_cost" type="text" class="form-control" name="total_project_cost" value="{{ old('total_project_cost') }}" required>

                                        @if ($errors->has('total_project_cost'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('total_project_cost') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4" align="left">
                            <label class="control-label">No. of EWS beneficiaries covered in the project</label>
                        </div>
                        <div class="col-md-8">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="gen" class="control-label">Gen</label>
                                    </div>
                                    <div class="row">
                                        <input id="gen" type="text" class="form-control" name="gen" value="{{ old('gen') }}" required>

                                        @if ($errors->has('gen'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('gen') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="sc" class="control-label">SC</label>
                                    </div>
                                    <div class="row">
                                        <input id="sc" type="text" class="form-control" name="sc" value="{{ old('sc') }}" required>

                                        @if ($errors->has('sc'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('sc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="st" class="control-label">ST</label>
                                    </div>
                                    <div class="row">
                                        <input id="st" type="text" class="form-control" name="st" value="{{ old('st') }}" required>

                                        @if ($errors->has('st'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('st') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="obc" class="control-label">OBC</label>
                                    </div>
                                    <div class="row">
                                        <input id="obc" type="text" class="form-control" name="obc" value="{{ old('obc') }}" required>

                                        @if ($errors->has('obc'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('obc') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="minority" class="control-label">Minority</label>
                                    </div>
                                    <div class="row">
                                        <input id="minority" type="text" class="form-control" name="minority" value="{{ old('minority') }}" required>

                                        @if ($errors->has('minority'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('minority') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="row" align="center">
                                        <label for="total_slum_household" class="control-label">Total</label>
                                    </div>
                                    <div class="row">
                                        <input id="total_slum_household" type="text" class="form-control" name="total_slum_household" value="{{ old('total_slum_household') }}" required>

                                        @if ($errors->has('total_slum_household'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('total_slum_household') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('selected') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="selected" class="control-label">Whether beneficiary has been selected as per PMAY guidelines?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="selected">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="selected" id="selected_Yes" value="Yes" required>
                                    <label class="form-check-label" for="selected_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="selected" id="selected_No" value="No">
                                    <label class="form-check-label" for="selected_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('selected'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('selected') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('construction_cost') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="construction_cost" class="control-label">Construction Cost of EWS Unit(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                            <input id="construction_cost" type="text" class="form-control" name="construction_cost" value="{{ old('construction_cost') }}" required>

                            @if ($errors->has('construction_cost'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('construction_cost') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_duration') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_duration" class="control-label">Project Duration(in months)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-3">
                                <input id="project_duration" type="text" class="form-control" name="project_duration" value="{{ old('project_duration') }}" required>

                                @if ($errors->has('project_duration'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('project_duration') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sales_price') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="sales_price" class="control-label">Whether sales price is provided by State/UT?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="sales_price">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sales_price" id="sales_price_Yes" value="Yes" required>
                                    <label class="form-check-label" for="sales_price_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sales_price" id="sales_price_No" value="No">
                                    <label class="form-check-label" for="sales_price_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('sales_price'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sales_price') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('carpet_area') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="carpet_area" class="control-label">Carpet Area of EWS Unit(in sqm)</label>
                        </div>
                        <div class="col-md-8">
                            <div class="col-md-3">
                                <input id="carpet_area" type="text" class="form-control" name="carpet_area" value="{{ old('carpet_area') }}" required>

                                @if ($errors->has('carpet_area'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('carpet_area') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('total_houses') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="total_houses" class="control-label">Total No. Of Projects Proposed In The Project</label>
                        </div>
                        <div class="col-md-8">
                                <input id="total_houses" type="text" class="form-control" name="total_houses" value="{{ old('total_houses') }}" required>

                                @if ($errors->has('total_houses'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('total_houses') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('ews_unit') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="ews_unit" class="control-label">i. No. Of EWS Unit</label>
                        </div>
                        <div class="col-md-8">
                                <input id="ews_unit" type="text" class="form-control" name="ews_unit" value="{{ old('ews_unit') }}" required>

                                @if ($errors->has('ews_unit'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('ews_unit') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('lig_unit') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="lig_unit" class="control-label">ii. No. Of LIG Units</label>
                        </div>
                        <div class="col-md-8">
                                <input id="lig_unit" type="text" class="form-control" name="lig_unit" value="{{ old('lig_unit') }}" required>

                                @if ($errors->has('lig_unit'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('lig_unit') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('mig_unit') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="mig_unit" class="control-label">iii. No. Of MIG Units</label>
                        </div>
                        <div class="col-md-8">
                                <input id="mig_unit" type="text" class="form-control" name="mig_unit" value="{{ old('mig_unit') }}" required>

                                @if ($errors->has('mig_unit'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('mig_unit') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('hig_unit') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="hig_unit" class="control-label">iv. No. Of HIG Units</label>
                        </div>
                        <div class="col-md-8">
                                <input id="hig_unit" type="text" class="form-control" name="hig_unit" value="{{ old('hig_unit') }}" required>

                                @if ($errors->has('hig_unit'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('hig_unit') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('commercial_unit') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="commercial_unit" class="control-label">v. No. Of Commercial Units</label>
                        </div>
                        <div class="col-md-8">
                                <input id="commercial_unit" type="text" class="form-control" name="commercial_unit" value="{{ old('commercial_unit') }}" required>

                                @if ($errors->has('commercial_unit'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('commercial_unit') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('private_partner') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="private_partner" class="control-label">Whether open and transparent procedure has been envisaged to select private partner, if private partner has been considered?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="private_partner">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="private_partner" id="private_partner_Yes" value="Yes" required>
                                    <label class="form-check-label" for="private_partner_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="private_partner" id="private_partner_No" value="No">
                                    <label class="form-check-label" for="private_partner_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('private_partner'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('private_partner') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('ews_eligible') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="ews_eligible" class="control-label">No. of EWS houses eligible for Central Assistance</label>
                        </div>
                        <div class="col-md-8">
                                <input id="ews_eligible" type="text" class="form-control" name="ews_eligible" value="{{ old('ews_eligible') }}" required>

                                @if ($errors->has('ews_eligible'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('ews_eligible') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('goi_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="goi_grant" class="control-label">i. GOI grant required(Rs.1.50 lakh per eligible EWS house)(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="goi_grant" type="text" class="form-control" name="goi_grant" value="{{ old('goi_grant') }}" required>

                                @if ($errors->has('goi_grant'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('goi_grant') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('state_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="state_grant" class="control-label">ii. State grant (Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="state_grant" type="text" class="form-control" name="state_grant" value="{{ old('state_grant') }}" required>

                                @if ($errors->has('state_grant'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('state_grant') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('land_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="land_grant" class="control-label">ii.a Land Cost(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="land_grant" type="text" class="form-control" name="land_grant" value="{{ old('land_grant') }}" required>

                                @if ($errors->has('land_grant'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('land_grant') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('cash_grant') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="cash_grant" class="control-label">ii.b Cash Grant(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="cash_grant" type="text" class="form-control" name="cash_grant" value="{{ old('cash_grant') }}" required>

                                @if ($errors->has('cash_grant'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('cash_grant') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('implementing_agency_share') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="implementing_agency_share" class="control-label">iii. Implementing Agency Share(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="implementing_agency_share" type="text" class="form-control" name="implementing_agency_share" value="{{ old('implementing_agency_share') }}" required>

                                @if ($errors->has('implementing_agency_share'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('implementing_agency_share') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('beneficiary_share') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="beneficiary_share" class="control-label">iv. Beneficiary Share(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="beneficiary_share" type="text" class="form-control" name="beneficiary_share" value="{{ old('beneficiary_share') }}" required>

                                @if ($errors->has('beneficiary_share'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('beneficiary_share') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('total_share') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="total_share" class="control-label">v. Total(Rs. in Lakhs)</label>
                        </div>
                        <div class="col-md-8">
                                <input id="total_share" type="text" class="form-control" name="total_share" value="{{ old('total_share') }}" required>

                                @if ($errors->has('total_share'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('total_share') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('specifications') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="specifications" class="control-label">Whether Techn specifications/design for housing have been ensured as per Indian Standards/NBC/State norms?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="specifications">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="specifications" id="specifications_Yes" value="Yes" required>
                                    <label class="form-check-label" for="techn_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="specifications" id="specifications_No" value="No">
                                    <label class="form-check-label" for="specifications_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('specifications'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('specifications') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('trunk_infrastructure') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="trunk_infrastructure" class="control-label">Whether trunk infrastructure is existing or is being provided through AMRUT or any other scheme?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="trunk_infrastructure">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trunk_infrastructure" id="trunk_infrastructure_Yes" value="Yes" required>
                                    <label class="form-check-label" for="trunk_infrastructure_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="trunk_infrastructure" id="trunk_infrastructure_No" value="No">
                                    <label class="form-check-label" for="trunk_infrastructure_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('trunk_infrastructure'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('trunk_infrastructure') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('water_supply') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="water_supply" class="control-label">Whether the provision of Civic infrastructure has been made as per applicable State norms/CPHEEO norms/IS Code/NBC?</label>
                            <label for="water_supply" class="control-label">i. Water Supply</label>
                        </div>
                        <div class="col-md-8">
                            <div id="water_supply">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="water_supply" id="water_supply_Yes" value="Yes" required>
                                    <label class="form-check-label" for="water_supply_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="water_supply" id="water_supply_No" value="No">
                                    <label class="form-check-label" for="water_supply_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('water_supply'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('water_supply') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('sewerage') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="sewerage" class="control-label">ii. Sewerage</label>
                        </div>
                        <div class="col-md-8">
                            <div id="sewerage">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sewerage" id="sewerage_Yes" value="Yes" required>
                                    <label class="form-check-label" for="sewerage_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sewerage" id="sewerage_No" value="No">
                                    <label class="form-check-label" for="sewerage_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('sewerage'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('sewerage') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('road') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="road" class="control-label">iii. Road</label>
                        </div>
                        <div class="col-md-8">
                            <div id="road">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="road" id="road_Yes" value="Yes" required>
                                    <label class="form-check-label" for="road_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="road" id="road_No" value="No">
                                    <label class="form-check-label" for="road_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('road'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('road') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('storm_water') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="storm_water" class="control-label">iv. Storm water drain</label>
                        </div>
                        <div class="col-md-8">
                            <div id="storm_water">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storm_water" id="storm_water_Yes" value="Yes" required>
                                    <label class="form-check-label" for="storm_water_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="storm_water" id="storm_water_No" value="No">
                                    <label class="form-check-label" for="storm_water_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('storm_water'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('storm_water') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('electrification') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="electrification" class="control-label">v. External Electrification</label>
                        </div>
                        <div class="col-md-8">
                            <div id="electrification">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="electrification" id="electrification_Yes" value="Yes" required>
                                    <label class="form-check-label" for="electrification_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="electrification" id="electrification_No" value="No">
                                    <label class="form-check-label" for="electrification_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('electrification'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('electrification') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('solid_waste') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="solid_waste" class="control-label">vi. Solid Waste Management</label>
                        </div>
                        <div class="col-md-8">
                            <div id="solid_waste">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="solid_waste" id="solid_waste_Yes" value="Yes" required>
                                    <label class="form-check-label" for="solid_waste_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="solid_waste" id="solid_waste_No" value="No">
                                    <label class="form-check-label" for="solid_waste_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('solid_waste'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('solid_waste') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('other_civic') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="other_civic" class="control-label">vii. Any Other</label>
                        </div>
                        <div class="col-md-8">
                                <input id="other_civic" type="text" class="form-control" name="other_civic" value="{{ old('other_civic') }}" required>

                                @if ($errors->has('other_civic'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('other_civic') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="reason" class="control-label">viii. In case,any infrastructure has not been proposed, reason thereof</label>
                        </div>
                        <div class="col-md-8">
                                <input id="reason" type="text" class="form-control" name="reason" value="{{ old('reason') }}" required>

                                @if ($errors->has('reason'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('social_infrastructure') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="social_infrastructure" class="control-label">Whether adequate social infrastructure facilities covered in the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="social_infrastructure">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="social_infrastructure" id="social_infrastructure_Yes" value="Yes" required>
                                    <label class="form-check-label" for="social_infrastructure_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="social_infrastructure" id="social_infrastructure_No" value="No">
                                    <label class="form-check-label" for="social_infrastructure_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('social_infrastructure'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('social_infrastructure') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('disaster') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="disaster" class="control-label">Whether disaster(earthquake, flood ,cyclone,landslide etc.) resistant features have been adopted in concept , design and implementation of the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="disaster">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disaster" id="disaster_Yes" value="Yes" required>
                                    <label class="form-check-label" for="disaster_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disaster" id="disaster_No" value="No">
                                    <label class="form-check-label" for="disaster_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('disaster'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('disaster') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('quality') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="quality" class="control-label">Whether Quality Assurance is part of the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="quality">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quality" id="quality_Yes" value="Yes" required>
                                    <label class="form-check-label" for="quality_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="quality" id="quality_No" value="No">
                                    <label class="form-check-label" for="quality_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('quality'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('quality') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('o_m') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="o_m" class="control-label">Whether O&M is part of project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="o_m">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="o_m" id="o_m_Yes" value="Yes" required>
                                    <label class="form-check-label" for="o_m_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="o_m" id="o_m_No" value="No">
                                    <label class="form-check-label" for="o_m_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('o_m'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('o_m') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('free_land') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="free_land" class="control-label">Whether encumbrance free land is available for the Project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="free_land">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="free_land" id="free_land_Yes" value="Yes" required>
                                    <label class="form-check-label" for="free_land_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="free_land" id="free_land_No" value="No">
                                    <label class="form-check-label" for="free_land_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('free_land'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('free_land') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('innovative_tech') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="innovative_tech" class="control-label">Whether any innovative/cost effective/Green technology adopted in the project?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="innovative_tech">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="innovative_tech" id="innovative_tech_Yes" value="Yes" required>
                                    <label class="form-check-label" for="innovative_tech_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="innovative_tech" id="innovative_tech_No" value="No">
                                    <label class="form-check-label" for="innovative_tech_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('innovative_tech'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('innovative_tech') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('comments') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="comments" class="control-label">Comments of SLAC after techno economic appraisal of DPR</label>
                        </div>
                        <div class="col-md-8">
                                <input id="comments" type="text" class="form-control" name="comments" value="{{ old('comments') }}" required>

                                @if ($errors->has('comments'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('comments') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('project_brief') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="project_brief" class="control-label">Project brief including any other information ULB/State would like to furnish</label>
                        </div>
                        <div class="col-md-8">
                                <input id="project_brief" type="text" class="form-control" name="project_brief" value="{{ old('project_brief') }}" required>

                                @if ($errors->has('project_brief'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('project_brief') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('submission_date') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="submission_date" class="control-label">Project Submission Date to SLMC</label>
                        </div>
                        <div class="col-md-8">
                                <input id="submission_date" type="text" class="form-control" name="submission_date" value="{{ old('submission_date') }}" required>

                                @if ($errors->has('submission_date'))
                                    <span class="help-block">
                                            <strong>{{ $errors->first('submission_date') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>

</html>