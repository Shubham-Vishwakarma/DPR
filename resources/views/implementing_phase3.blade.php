<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="icon" href="/img/header.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Phase 3</title>
</head>

<body>
<div class="container-fluid">
    <div class="row" style="background-color: rgb(206,219,233);">
        <div class="col-md-2 col-sm-2" align="center">
            <img src="/img/logo-head.png" class="img-responsive" alt="PMAY1" style="max-height: 150px;">
        </div>
        <div class="col-md-8 col-sm-2">
            <span style="vertical-align: middle;">
                <h3 class="text-header text-center">Online Detailed Project Report</h3>
            </span>
            <div align="center">
                <img src="/img/maha-logo.png" class="img-responsive" alt="PMAY1" style="max-height: 75px;">
            </div>
        </div>
    </div>
</div>

<nav class="navbar" style="background-color: #C5CAE9; color: #212121; font-size: 1.15em;">
    <div class="container-fluid">
        <!--<div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <a class="navbar-brand" href="#" style="color: #212121; font-size: 1.2em;">PMAY Home</a>
                </li>
            </ul>
        </div>-->
        <ul class="nav navbar-nav">
            <li>
                <a href="{{route('home')}}" style="color: #212121;">PMAY Home</a>
            </li>
            <li>
                <a href="{{route('home')}}" style="color: #212121;">About</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('login')}}" style="color: #212121;">Logout</a></li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><a href="javascript: myFunction()"><i class="fa fa-user-circle-o" style="font-size:24px; color: black;"></i></a></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Profile</a>
                        <a href="#">Settings</a>
                        <a href="#">Sign Out</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div align="center">
    <h1>Beneficiary Led Construction or Enhancement</h1>
</div>

{{--<div class="form-group{{ $errors->has('project_code') ? ' has-error' : '' }}">--}}
    {{--<div class="col-md-4" align="left">--}}

    {{--</div>--}}
    {{--<div class="col-md-8">--}}

    {{--</div>--}}
{{--</div>--}}

<div class="container">

    <form class="form-horizontal" method="POST" action="{{ route('implementing_phase3') }}">
        {{ csrf_field() }}
		<br>
        <table class="table table-responsive table-hover">
                <thead>
                    <tr>
                        <th class="col-md-1">#</th>
                        <th class="col-md-5">Title</th>
                        <th class="col-md-6">Answers</th>
                    </tr>
                </thead>
            <tbody>
                <tr>
                    <td><label for="state_name" class="control-label">1</label></td>
                    <td><label for="state_name" class="control-label">Name of the State</label></td>
                    <td>
                        <input id="state_name" type="text" class="form-control" name="state_name" value="{{ old('state_name') }}" required autofocus>

                        @if ($errors->has('state_name'))
                            <span class="help-block">
                                                <strong>{{ $errors->first('state_name') }}</strong>
                                        </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="district_name" class="control-label">2</label></td>
                    <td><label for="district_name" class="control-label">Name of the District</label></td>
                    <td>
                        <input id="district_name" type="text" class="form-control" name="district_name" value="{{ old('district_name') }}" required>

                        @if ($errors->has('district_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('district_name') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="city_name" class="control-label">3</label></td>
                    <td><label for="city_name" class="control-label">Name of the City</label></td>
                    <td>
                        <input id="city_name" type="text" class="form-control" name="city_name" value="{{ old('city_name') }}" required>

                        @if ($errors->has('city_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('city_name') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="project_name" class="control-label">4</label></td>
                    <td><label for="project_name" class="control-label">Project Name</label></td>
                    <td>
                        <input id="project_name" type="text" class="form-control" name="project_name" value="{{ old('project_name') }}" required>

                        @if ($errors->has('project_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('project_name') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="project_code" class="control-label">5</label></td>
                    <td><label for="project_code" class="control-label">Project Code</label></td>
                    <td>
                        <input id="project_code" type="text" class="form-control" name="project_code" value="{{ old('project_code') }}" required>

                        @if ($errors->has('project_code'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('slum_name') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="nodal_agency" class="control-label">6</label></td>
                    <td><label for="nodal_agency" class="control-label">State Level Nodal Agency</label></td>
                    <td>
                        <input id="nodal_agency" type="text" class="form-control" name="nodal_agency" value="{{ old('nodal_agency') }}" required>

                        @if ($errors->has('nodal_agency'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('nodal_agency') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="implementing_agency" class="control-label">7</label></td>
                    <td><label for="implementing_agency" class="control-label">Implementing Agency</label></td>
                    <td>
                        <input id="implementing_agency" type="text" class="form-control" name="implementing_agency" value="{{ old('implementing_agency') }}" required>

                        @if ($errors->has('implementing_agency'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="implementing_agency_name" class="control-label">8</label></td>
                    <td><label for="implementing_agency_name" class="control-label">Implementing Agency Name</label></td>
                    <td>
                        <input id="implementing_agency_name" type="text" class="form-control" name="implementing_agency_name" value="{{ old('implementing_agency_name') }}" required>

                        @if ($errors->has('implementing_agency_name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency_name') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="project_cost" class="control-label">9</label></td>
                    <td><label for="project_cost" class="control-label">Project Cost (Rs. In Lakhs)</label></td>
                    <td>
                        <input id="project_cost" type="text" class="form-control" name="project_cost" value="{{ old('project_cost') }}" required>

                        @if ($errors->has('project_cost'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('project_cost') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">10</label></td>
                    <td><label class="control-label">No. of beneficiaries covered in the project</label></td>
                    <td>
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">10. i)</label></td>
                    <td><label class="control-label">No. of beneficiaries (New Construction)</label></td>
                    <td>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_gen" type="text" class="form-control" name="construct_gen" value="{{ old('construct_gen') }}" required>

                                    @if ($errors->has('construct_gen'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_gen') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_sc" type="text" class="form-control" name="construct_sc" value="{{ old('construct_sc') }}" required>

                                    @if ($errors->has('construct_sc'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_sc') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_st" type="text" class="form-control" name="construct_st" value="{{ old('construct_st') }}" required>

                                    @if ($errors->has('construct_st'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_st') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_obc" type="text" class="form-control" name="construct_obc" value="{{ old('construct_obc') }}" required>

                                    @if ($errors->has('construct_obc'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_obc') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_minority" type="text" class="form-control" name="construct_minority" value="{{ old('construct_minority') }}" required>

                                    @if ($errors->has('construct_minority'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_minority') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="construct_total_slum_household" type="text" class="form-control" name="construct_total_slum_household" value="{{ old('construct_total_slum_household') }}" required>

                                    @if ($errors->has('construct_total_slum_household'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('construct_total_slum_household') }}</strong>
                                            </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">10. ii)</label></td>
                    <td><label class="control-label">No. of beneficiaries (Enhancement)</label></td>
                    <td>
                        <div class="row">
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_gen" type="text" class="form-control" name="enhancement_gen" value="{{ old('enhancement_gen') }}" required>

                                    @if ($errors->has('enhancement_gen'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_gen') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_sc" type="text" class="form-control" name="enhancement_sc" value="{{ old('enhancement_sc') }}" required>

                                    @if ($errors->has('enhancement_sc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_sc') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_st" type="text" class="form-control" name="enhancement_st" value="{{ old('enhancement_st') }}" required>

                                    @if ($errors->has('enhancement_st'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_st') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_obc" type="text" class="form-control" name="enhancement_obc" value="{{ old('enhancement_obc') }}" required>

                                    @if ($errors->has('enhancement_obc'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_obc') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_minority" type="text" class="form-control" name="enhancement_minority" value="{{ old('enhancement_minority') }}" required>

                                    @if ($errors->has('enhancement_minority'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_minority') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="row">
                                    <input id="enhancement_total_slum_household" type="text" class="form-control" name="enhancement_total_slum_household" value="{{ old('enhancement_total_slum_household') }}" required>

                                    @if ($errors->has('enhancement_total_slum_household'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('enhancement_total_slum_household') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="selected_PMAY_label" class="control-label">11</label></td>
                    <td>
                        <label for="selected_PMAY_label" class="control-label">Whether beneficiary have been</label>
                        <label for="selected_PMAY_label" class="control-label">selected as per PMAY guidelines?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="selected_PMAY_label">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selected_PMAY" id="selected_PMAY_Yes" value="Yes" required>
                                <label class="form-check-label" for="selected_PMAY_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="selected_PMAY" id="selected_PMAY_No" value="No">
                                <label class="form-check-label" for="selected_PMAY_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('selected_PMAY'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('selected_PMAY') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="ownership_label" class="control-label">12</label></td>
                    <td>
                        <label for="ownership_label" class="control-label">Whether it has been ensured that</label>
                        <label for="ownership_label" class="control-label">selected beneficiaries have rightful</label>
                        <label for="ownership_label" class="control-label">ownership of the land?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="ownership_label">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ownership" id="ownership_Yes" value="Yes" required>
                                <label class="form-check-label" for="ownership_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ownership" id="ownership_No" value="No">
                                <label class="form-check-label" for="ownership_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('ownership'))
                            <span class="help-block">
                                <strong>{{ $errors->first('ownership') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="approved" class="control-label">13</label></td>
                    <td>
                        <label for="approved_label" class="control-label">Whether building plan for all</label>
                        <label for="approved_label" class="control-label">houses have been approved?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="approved_label">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="approved" id="approved_Yes" value="Yes" required>
                                <label class="form-check-label" for="approved_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="approved" id="approved_No" value="No">
                                <label class="form-check-label" for="approved_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('approved'))
                            <span class="help-block">
                                <strong>{{ $errors->first('approved') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="goi_grant" class="control-label">13. i)</label></td>
                    <td>
                        <label for="goi_grant" class="control-label">GoI grant required (Rs. 1.5 lakh</label>
                        <label for="goi_grant" class="control-label">per eligible beneficiary) </label>
                        <label for="goi_grant" class="control-label">(Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="goi_grant" type="text" class="form-control" name="goi_grant" value="{{ old('goi_grant') }}" required>

                        @if ($errors->has('goi_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('goi_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="state_grant" class="control-label">13. ii)</label></td>
                    <td>
                        <label for="state_grant" class="control-label">State grant, if any (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="state_grant" type="text" class="form-control" name="state_grant" value="{{ old('state_grant') }}" required>

                        @if ($errors->has('state_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('state_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="ulb_grant" class="control-label">13. iii)</label></td>
                    <td>
                        <label for="ulb_grant" class="control-label">ULB grant, if any (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="ulb_grant" type="text" class="form-control" name="ulb_grant" value="{{ old('ulb_grant') }}" required>

                        @if ($errors->has('ulb_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('ulb_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="beneficiary_share" class="control-label">13. iv)</label></td>
                    <td>
                        <label for="beneficiary_share" class="control-label">Beneficiary Share (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="beneficiary_share" type="text" class="form-control" name="beneficiary_share" value="{{ old('beneficiary_share') }}" required>

                        @if ($errors->has('beneficiary_share'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('beneficiary_share') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="total_grant" class="control-label">13. v)</label></td>
                    <td>
                        <label for="total_grant" class="control-label">Total (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="total_grant" type="text" class="form-control" name="total_grant" value="{{ old('total_grant') }}" required>

                        @if ($errors->has('total_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('total_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="specifications" class="control-label">14</label></td>
                    <td>
                        <label for="specifications" class="control-label">Whether technical</label>
                        <label for="specifications" class="control-label">specification/design for housing</label>
                        <label for="specifications" class="control-label">have been ensured as per Indian</label>
                        <label for="specifications" class="control-label">Standards/NBC/ State norms?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="specifications">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="specifications" id="specifications_Yes" value="Yes" required>
                                <label class="form-check-label" for="specifications_Yes">
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
                    </td>
                </tr>
                <tr>
                    <td><label for="balance_cost" class="control-label">15</label></td>
                    <td>
                        <label for="balance_cost" class="control-label">Whether it has been ensured that balance cost of</label>
                        <label for="balance_cost" class="control-label">construction is tied up with State Grant, ULB Grant</label>
                        <label for="balance_cost" class="control-label">& Beneficiary Share</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="balance_cost">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="balance_cost" id="balance_cost_Yes" value="Yes" required>
                                <label class="form-check-label" for="balance_cost_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="balance_cost" id="balance_cost_No" value="No">
                                <label class="form-check-label" for="balance_cost_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('balance_cost'))
                            <span class="help-block">
                                <strong>{{ $errors->first('balance_cost') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16</label></td>
                    <td>
                        <label class="control-label">Whether trunk and line infrastructure is existing</label>
                        <label class="control-label">or being provisioned</label>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td><label class="control-label">16. i)</label></td>
                    <td>
                        <label for="water_supply" class="control-label">Water Supply</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="water_supply">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. ii)</label></td>
                    <td>
                        <label for="sewerage" class="control-label">Sewerage</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="sewerage">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. iii)</label></td>
                    <td>
                        <label for="road" class="control-label">Road</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="road">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. iv)</label></td>
                    <td>
                        <label for="storm_water_drain" class="control-label">Storm Water Drain</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="storm_water_drain">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="storm_water_drain" id="storm_water_drain_Yes" value="Yes" required>
                                <label class="form-check-label" for="storm_water_drain_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="storm_water_drain" id="storm_water_drain_No" value="No">
                                <label class="form-check-label" for="storm_water_drain_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('storm_water_drain'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('storm_water_drain') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. v)</label></td>
                    <td>
                        <label for="electrification" class="control-label">External Electrification</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="electrification">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. vi)</label></td>
                    <td>
                        <label for="solid_waste" class="control-label">Solid Waste Management</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="solid_waste">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. vii)</label></td>
                    <td>
                        <label for="other_infrastructure" class="control-label">vii. Any other, specify</label>
                    </td>
                    <td>
                        <input id="other_infrastructure" type="text" class="form-control" name="other_infrastructure" value="{{ old('other_infrastructure') }}" required>

                        @if ($errors->has('other_infrastructure'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('other_infrastructure') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">16. viii)</label></td>
                    <td>
                        <label for="reasons" class="control-label">In case, any infrastructure has not been proposed, reasons</label>
                        <label for="reasons" class="control-label">thereof</label>
                    </td>
                    <td>
                        <input id="reasons" type="text" class="form-control" name="reasons" value="{{ old('reasons') }}" required>

                        @if ($errors->has('reasons'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('reasons') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">17</label></td>
                    <td>
                        <label for="disaster" class="control-label">Whether disaster (earthquake,</label>
                        <label for="disaster" class="control-label">flood, cyclone, landslide etc.)</label>
                        <label for="disaster" class="control-label">resistant features have been</label>
                        <label for="disaster" class="control-label">adopted in concept, design and</label>
                        <label for="disaster" class="control-label">implementation of the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="disaster">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">18</label></td>
                    <td>
                        <label for="survey" class="control-label">Whether Demand Survey completed for entire city?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="survey">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey" id="survey_Yes" value="Yes" required>
                                <label class="form-check-label" for="survey_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="survey" id="survey_No" value="No">
                                <label class="form-check-label" for="survey_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('survey'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('survey') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">19</label></td>
                    <td>
                        <label for="city_wide" class="control-label">Whether City-wide integrated project have been</label>
                        <label for="city_wide" class="control-label">formulated?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="city_wide">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="city_wide" id="city_wide_Yes" value="Yes" required>
                                <label class="form-check-label" for="city_wide_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="city_wide" id="city_wide_No" value="No">
                                <label class="form-check-label" for="city_wide_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('city_wide'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('city_wide') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">20</label></td>
                    <td>
                        <label for="secc" class="control-label">Whether validation with SECC data for housing condition</label>
                        <label for="secc" class="control-label">conducted?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="secc">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="secc" id="secc_Yes" value="Yes" required>
                                <label class="form-check-label" for="secc_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="secc" id="secc_No" value="No">
                                <label class="form-check-label" for="secc_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('secc'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('secc') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">21</label></td>
                    <td>
                        <label for="dbt" class="control-label">Whether Direct Benefit Transfer(DBT) of fund</label>
                        <label for="dbt" class="control-label">to individual bank account of beneficiary ensured</label>
                        <label for="dbt" class="control-label">in the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="dbt">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dbt" id="dbt_Yes" value="Yes" required>
                                <label class="form-check-label" for="dbt_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dbt" id="dbt_No" value="No">
                                <label class="form-check-label" for="dbt_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('dbt'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('dbt') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">22</label></td>
                    <td>
                        <label for="tracking" class="control-label">Whether there is provision in DPR for</label>
                        <label for="tracking" class="control-label">tracking/monitoring the progress of individual</label>
                        <label for="tracking" class="control-label">houses through geo-tagged photographs?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="tracking">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tracking" id="tracking_Yes" value="Yes" required>
                                <label class="form-check-label" for="tracking_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="tracking" id="tracking_No" value="No">
                                <label class="form-check-label" for="tracking_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('tracking'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('tracking') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">23</label></td>
                    <td>
                        <label for="innovative" class="control-label">Whether any innovative/cost</label>
                        <label for="innovative" class="control-label">effective/Green technology</label>
                        <label for="innovative" class="control-label">adopted in the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="innovative">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="innovative" id="innovative_Yes" value="Yes" required>
                                <label class="form-check-label" for="innovative_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="innovative" id="innovative_No" value="No">
                                <label class="form-check-label" for="innovative_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('innovative'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('innovative') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">24</label></td>
                    <td>
                        <label for="slac_comments" class="control-label">Comments of SLAC after techno</label>
                        <label for="slac_comments" class="control-label">economic appraisal of DPR</label>
                    </td>
                    <td>
                        <input id="slac_comments" type="text" class="form-control" name="slac_comments" value="{{ old('slac_comments') }}" required>

                        @if ($errors->has('slac_comments'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('slac_comments') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">24</label></td>
                    <td>
                        <label for="project_brief" class="control-label">Project brief including any other</label>
                        <label for="project_brief" class="control-label">information ULB/State would like</label>
                        <label for="project_brief" class="control-label">to furnish</label>
                    </td>
                    <td>
                        <input id="project_brief" type="text" class="form-control" name="project_brief" value="{{ old('project_brief') }}" required>

                        @if ($errors->has('project_brief'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('project_brief') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">25</label></td>
                    <td>
                        <label for="submission_date" class="control-label">Project Submission Date to SLSMC</label>
                    </td>
                    <td>
                        <input id="submission_date" type="date" class="form-control" name="submission_date" value="{{ old('submission_date') }}" required>

                        @if ($errors->has('submission_date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('submission_date') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="row" align="center">
            <button class="btn btn-primary" style="margin: 20px">Save</button>
            <button type="submit" class="btn btn-success" style="margin: 20px">Submit</button>
        </div>

    </form>
</div>
<div class="container-fluid" style="background-color: #283593;">
    <div class="container" style="background-color: #283593;">
        <br>
        <div class="row">
            <div class="col-md-1 col-sm-1">

            </div>
            <div class="col-md-2 col-sm-2" align="center">
                <img src="/img/logo_wt.png" class="img-responsive" alt="PMAY1" style="max-height: 150px;">
            </div>
            <div class="col-md-2 col-sm-2" align="center">
                <p class="text-footer-heading">
                    PMAY
                </p>
                <p class="text-footer">
                    About <br> History
                </p>
            </div>
            <div class="col-md-2 col-sm-2" align="center">
                <p class="text-footer-heading">
                    Related Sites
                </p>
                <p class="text-footer">
                    Site 1 <br> Site 2 <br> GST GOV
                </p>
            </div>
            <div class="col-md-2 col-sm-2" align="center">
                <p class="text-footer-heading">
                    Help
                </p>
                <p class="text-footer">
                    Requirements <br> How To Register <br> DPR Manual
                </p>
            </div>
            <div class="col-md-2 col-sm-2" align="center">
                <div class="row">
                    <p class="text-footer-heading">
                        Contact Us
                    </p>
                    <p class="text-footer">
                        Help Desk Number :  <br> 1800-xxxx-xxxx <br>
                    </p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <i class="fa fa-facebook-square" style="font-size:1.5em;color:#CFD8DC"></i>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <i class="fa fa-youtube-play" style="font-size:1.5em;color:#CFD8DC"></i>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <i class="fa fa-twitter-square" style="font-size:1.5em;color:#CFD8DC"></i>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-3" align="center">
                        <i class="fa fa-linkedin-square" style="font-size:1.5em;color:#CFD8DC"></i>
                    </div>
                </div>

            </div>
        </div>
        <br>
    </div>
</div>
<div class="container-fluid" style="background-color: #1A237E; padding: 1em 1em 1em 1em;">
    <div class="container">
        <p style="color: #F5F5F5; font-size: 1.2em;" class="text-center"><i class="fa fa-copyright" aria-hidden="true"></i> This site was made as a part of Smart India Hackathon 2018 by Team Friday</p>
    </div>
</div>
</body>

</html>