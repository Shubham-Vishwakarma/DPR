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
            <h1>Affordable Housing in Partnership Format</h1>
        </div>
		
		{{--<div class="form-group{{ $errors->has('project_code') ? ' has-error' : '' }}">--}}
    {{--<div class="col-md-4" align="left">--}}

    {{--</div>--}}
    {{--<div class="col-md-8">--}}

    {{--</div>--}}
{{--</div>--}}

<div class="container">

    <form class="form-horizontal" method="POST" action="{{ route('implementing_phase2') }}">
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
                    <td><label for="implementing_agency" class="control-label">Implementing Agency</label>
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
                    <td><label for="approval_date" class="control-label">9</label></td>
                    <td><label for="approval_date" class="control-label">Date of approval by SLSMC</label></td>
					<td>
                        <input id="approval_date" type="text" class="form-control" name="approval_date" value="{{ old('approval_date') }}" required>

                        @if ($errors->has('approval_date'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('approval_date') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				<tr>
                    <td><label for="project_cost" class="control-label">10</label></td>
                    <td><label for="project_cost" class="control-label">Project Cost (Rs. in Lakhs)</label></td>
                    <td>
                        <div class="row">
                            <div class="col-md-2">
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
                            <div class="col-md-2">
                                <div class="row" align="center">
                                    <label for="infrastructure" class="control-label">Infrastructure</label>
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
                            <div class="col-md-2">
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
                            <div class="col-md-2">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">11</label></td>
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
                    <td><label for="selected" class="control-label">12</label></td>
                    <td>
                        <label for="selected" class="control-label">Whether beneficiaries have been</label>
                        <label for="selected" class="control-label">selected as per PMAY guidelines?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="selected">
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
                    </td>
                </tr>
				<tr>
                    <td><label for="construction_cost" class="control-label">13</label></td>
                    <td><label for="construction_cost" class="control-label">Construction Cost of EWS Unit(Rs. in Lakhs)</label></td>
                    <td>
                        <input id="construction_cost" type="text" class="form-control" name="construction_cost" value="{{ old('construction_cost') }}" required>

                        @if ($errors->has('construction_cost'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('construction_cost') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				<tr>
                    <td><label for="project_duration" class="control-label">14</label></td>
                    <td><label for="project_duration" class="control-label">Project Duration (In Months)</label></td>
                    <td>
                        <input id="project_duration" type="text" class="form-control" name="project_duration" value="{{ old('project_duration') }}" required>

                        @if ($errors->has('project_duration'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('project_duration') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				<tr>
                    <td><label for="sales_price" class="control-label">15</label></td>
                    <td>
                        <label for="sales_price" class="control-label">Whether sales price is provided</label>
                        <label for="sales_price" class="control-label">by State/UT?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="sales_price">
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
                    </td>
                </tr>
				
				<tr>
                    <td><label for="carpet_area" class="control-label">16</label></td>
                    <td><label for="carpet_area" class="control-label">Carpet Area of EWS Unit(in sqm)</label></td>
                    <td>
                        <input id="carpet_area" type="text" class="form-control" name="carpet_area" value="{{ old('carpet_area') }}" required>

                        @if ($errors->has('carpet_area'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('carpet_area') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="total_houses" class="control-label">17</label></td>
                    <td><label for="total_houses" class="control-label">Total No. Of Projects Proposed In The Project</label></td>
                    <td>
                        <input id="total_houses" type="text" class="form-control" name="total_houses" value="{{ old('total_houses') }}" required>

                        @if ($errors->has('total_houses'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('total_houses') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="ews_unit" class="control-label">17.i)</label></td>
                    <td><label for="ews_unit" class="control-label">No. Of EWS Units</label></td>
                    <td>
                        <input id="ews_unit" type="text" class="form-control" name="ews_unit" value="{{ old('ews_unit') }}" required>

                        @if ($errors->has('ews_unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('ews_unit') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="lig_unit" class="control-label">17.ii)</label></td>
                    <td><label for="lig_unit" class="control-label">No. Of LIG Units</label></td>
                    <td>
                        <input id="lig_unit" type="text" class="form-control" name="lig_unit" value="{{ old('lig_unit') }}" required>

                        @if ($errors->has('lig_unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('lig_unit') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="mig_unit" class="control-label">17.iii)</label></td>
                    <td><label for="mig_unit" class="control-label">No. Of MIG Units</label></td>
                    <td>
                        <input id="mig_unit" type="text" class="form-control" name="mig_unit" value="{{ old('mig_unit') }}" required>

                        @if ($errors->has('mig_unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mig_unit') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="hig_unit" class="control-label">17.iv)</label></td>
                    <td><label for="hig_unit" class="control-label">No. Of HIG Units</label></td>
                    <td>
                        <input id="hig_unit" type="text" class="form-control" name="hig_unit" value="{{ old('hig_unit') }}" required>

                        @if ($errors->has('hig_unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('hig_unit') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="commercial_unit" class="control-label">17.v)</label></td>
                    <td><label for="commercial_unit" class="control-label">No. Of Commercial Units</label></td>
                    <td>
                        <input id="commercial_unit" type="text" class="form-control" name="commercial_unit" value="{{ old('commercial_unit') }}" required>

                        @if ($errors->has('commercial_unit'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('commercial_unit') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>				
				
				<tr>
                    <td><label for="private_partner" class="control-label">18</label></td>
                    <td>
                        <label for="private_partner" class="control-label">Whether open and transparent procedure has been</label>
                        <label for="private_partner" class="control-label">envisaged to select private partner, if private</label>
                        <label for="private_partner" class="control-label">partner has been considered?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="private_partner">
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
                    </td>
                </tr>
				
				<tr>
                    <td><label for="ews_eligible" class="control-label">19</label></td>
                    <td><label for="ews_eligible" class="control-label">No. of EWS houses eligible for Central Assistance</label></td>
                    <td>
                        <input id="ews_eligible" type="text" class="form-control" name="ews_eligible" value="{{ old('ews_eligible') }}" required>

                        @if ($errors->has('ews_eligible'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('ews_eligible') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
                <tr>
                    <td><label for="goi_grant" class="control-label">19.i)</label></td>
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
                    <td><label for="state_grant" class="control-label">19.ii)</label></td>
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
                    <td><label for="land_grant" class="control-label">19.ii)(a)</label></td>
                    <td>
                        <label for="land_grant" class="control-label">Land Cost(Rs. in Lakhs)</label>
                    </td>
                    <td>
                        <input id="land_grant" type="text" class="form-control" name="land_grant" value="{{ old('land_grant') }}" required>

                        @if ($errors->has('land_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('land_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="cash_grant" class="control-label">19.ii)(b)</label></td>
                    <td>
                        <label for="cash_grant" class="control-label">Cash Grants(Rs. in Lakhs)</label>
                    </td>
                    <td>
                        <input id="cash_grant" type="text" class="form-control" name="cash_grant" value="{{ old('cash_grant') }}" required>

                        @if ($errors->has('cash_grant'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('cash_grant') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="implementing_agency_share" class="control-label">19.iii)</label></td>
                    <td>
                        <label for="implementing_agency_share" class="control-label">Implementing Agency Grant (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="implementing_agency_share" type="text" class="form-control" name="implementing_agency_share" value="{{ old('implementing_agency_share') }}" required>

                        @if ($errors->has('implementing_agency_share'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('implementing_agency_share') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
                <tr>
                    <td><label for="beneficiary_share" class="control-label">19.iv)</label></td>
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
                    <td><label for="total_share" class="control-label">19.v)</label></td>
                    <td>
                        <label for="total_share" class="control-label">Total (Rs. In Lakhs)</label>
                    </td>
                    <td>
                        <input id="total_share" type="text" class="form-control" name="total_share" value="{{ old('total_share') }}" required>

                        @if ($errors->has('total_share'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('total_share') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
                <tr>
                    <td><label for="specifications" class="control-label">20</label></td>
                    <td>
                        <label for="specifications" class="control-label">Whether technical</label>
                        <label for="specifications" class="control-label">specification/design for housing</label>
                        <label for="specifications" class="control-label">have been ensured as per Indian</label>
                        <label for="specifications" class="control-label">Standards/NBC/State norms?</label>
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
                    <td><label for="trunk_infrastructure" class="control-label">21</label></td>
                    <td>
                        <label for="trunk_infrastructure" class="control-label">Whether trunk infrastructure is existing or is</label>
                        <label for="trunk_infrastructure" class="control-label">being provided through AMRUT or any other scheme?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="trunk_infrastructure">
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
                    </td>
                </tr>
                <tr>
                    <td><label for="civic_infrastructure" class="control-label">22</label></td>
                    <td>
                        <label for="civic_infrastructure" class="control-label">Whether the provision of Civic infrastructure</label>
                        <label for="civic_infrastructure" class="control-label">has been made as per applicable State norms/</label>
						<label for="civic_infrastructure" class="control-label">CPHEEO norms/IS Code/NBC?</label>
                    </td>
                    <td>
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">22.i)</label></td>
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
                    <td><label class="control-label">22.ii)</label></td>
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
                    <td><label class="control-label">22.iii)</label></td>
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
                    <td><label class="control-label">22.iv)</label></td>
                    <td>
                        <label for="storm_water" class="control-label">Storm Water Drain</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="storm_water">
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
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">22.v)</label></td>
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
                    <td><label class="control-label">22.vi)</label></td>
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
                    <td><label class="control-label">22.vii)</label></td>
                    <td>
                        <label for="other_civic" class="control-label">vii. Any other, specify</label>
                    </td>
                    <td>
                        <input id="other_civic" type="text" class="form-control" name="other_civic" value="{{ old('other_civic') }}" required>

                        @if ($errors->has('other_civic'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('other_civic') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label class="control-label">22.viii)</label></td>
                    <td>
                        <label for="reason" class="control-label">In case, any infrastructure has not been proposed, reasons</label>
                        <label for="reason" class="control-label">thereof</label>
                    </td>
                    <td>
                        <input id="reason" type="text" class="form-control" name="reason" value="{{ old('reason') }}" required>

                        @if ($errors->has('reason'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td><label for="social_infrastructure" class="control-label">23</label></td>
                    <td>
                        <label for="social_infrastructure" class="control-label">Whether adequate social infrastructure facilities</label>
                        <label for="social_infrastructure" class="control-label">covered in the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="social_infrastructure">
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
                    </td>
                </tr>
				
				<tr>
                    <td><label for="disaster" class="control-label">24</label></td>
                    <td>
                        <label for="disaster" class="control-label">Whether disaster(earthquake, flood ,cyclone, landslide</label>
                        <label for="disaster" class="control-label">etc.) resistant features have been adopted</label>
						<label for="disaster" class="control-label">in concept , design and implementation of the project?</label>
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
                    <td><label for="quality" class="control-label">25</label></td>
                    <td>
                        <label for="quality" class="control-label">Whether Quality Assurance is</label>
                        <label for="quality" class="control-label">part of the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="quality">
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
                    </td>
                </tr>
				
				<tr>
                    <td><label for="o_m" class="control-label">26</label></td>
                    <td>
                        <label for="o_m" class="control-label">Whether O&M is part of the project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="o_m">
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
                    </td>
                </tr>
				
				<tr>
                    <td><label for="encumbrance" class="control-label">27</label></td>
                    <td>
                        <label for="encumbrance" class="control-label">Whether encumbrance free land</label>
						<label for="encumbrance" class="control-label">is available for the Project?</label>
                    </td>
                    <td>
                        <div class="col-sm-10" id="encumbrance">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="encumbrance" id="encumbrance_Yes" value="Yes" required>
                                <label class="form-check-label" for="encumbrance_Yes">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="encumbrance" id="encumbrance_No" value="No">
                                <label class="form-check-label" for="encumbrance_No">
                                    No
                                </label>
                            </div>
                        </div>
                        @if ($errors->has('encumbrance'))
                            <span class="help-block">
                                <strong>{{ $errors->first('encumbrance') }}</strong>
                            </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label for="innovative" class="control-label">28</label></td>
                    <td>
                        <label for="innovative" class="control-label">Whether any innovative/cost effective/</label>
						<label for="innovative" class="control-label">Green technology adopted in the project?</label>
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
                    <td><label class="control-label">29</label></td>
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
                    <td><label class="control-label">30</label></td>
                    <td>
                        <label for="brief" class="control-label">Project brief including any other information</label>
                        <label for="brief" class="control-label">ULB/State would like to furnish</label>
                    </td>
                    <td>
                        <input id="brief" type="text" class="form-control" name="brief" value="{{ old('brief') }}" required>

                        @if ($errors->has('brief'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('brief') }}</strong>
                                </span>
                        @endif
                    </td>
                </tr>
				
				<tr>
                    <td><label class="control-label">31</label></td>
                    <td>
                        <label for="submission_date" class="control-label">Project Submission Date to SLMC</label>
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