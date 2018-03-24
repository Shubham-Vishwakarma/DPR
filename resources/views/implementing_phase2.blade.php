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
                <form class="form-horizontal" method="POST" action="#">
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

                    <div class="form-group{{ $errors->has('PMAY_guidelines') ? ' has-error' : '' }}">
                        <div class="col-md-4" align="left">
                            <label for="PMAY_guidelines" class="control-label">Whether beneficiary has been selected as per PMAY guidelines?</label>
                        </div>
                        <div class="col-md-8">
                            <div id="PMAY_guidelines">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PMAY_guidelines" id="PMAY_guidelines_Yes" value="Yes" required>
                                    <label class="form-check-label" for="PMAY_guidelines_Yes">
                                        Yes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="PMAY_guidelines" id="PMAY_guidelines_No" value="No">
                                    <label class="form-check-label" for="PMAY_guidelines_No">
                                        No
                                    </label>
                                </div>
                            </div>
                            @if ($errors->has('PMAY_guidelines'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('PMAY_guidelines') }}</strong>
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

                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
    </body>

</html>