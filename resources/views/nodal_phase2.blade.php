<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    .backcolor {
      background-color: yellow;
    }

    .backcolor1 {
      background-color: red;
    }

    .backcolor2 {
      background-color: green;
    }

    .heightcontrol {
      height: 100%;
    }

    .format {
      padding: 10px;
    }
  </style>
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
  <div class="container">
  <br />
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">DashBoard</a></li>
        <li class="breadcrumb-item"><a href="#">Phase2 {ID}</a></li>
      </ol>
    </nav>
      <h1 class="display-4">Phase 2 Verification</h1><br />

      @if($phase2)
      <form class="form-horizontal" method="POST" action="{{ route('nodal_phase2',$phase2->id) }}">
        {{ csrf_field() }}
        <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col-4">Title</th>
          <th scope="col-5">Answers</th>
          <th scope="col-3">Comment</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Name of State</td>
          <td>{{ $phase2->state_name }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="state_name" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Name of District</td>
          <td>{{ $phase2->district_name }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="district_name" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Name of City</td>
          <td>{{ $phase2->city_name }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="city_name" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Project Name</td>
          <td>{{ $phase2->project_name }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="project_name" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Project Code</td>
          <td>{{ $phase2->project_code }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="project_code" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>State Level Nodal Agency</td>
          <td>{{ $phase2->nodal_agency }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="nodal_agency" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Implementing Agency</td>
          <td>{{ $phase2->implementing_agency }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="implementing_agency" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Implementing Agency Name</td>
          <td>{{ $phase2->implementing_agency_name }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="implementing_agency_name" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">9</th>
          <td>Date of Approval by State Level Sanctioning and Monitoring Committee(SLMC) </td>
          <td>{{ $phase2->approval_date }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="approval_date" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">10</th>
          <td>Project Cost(Rs. In Lakhs)</td>
          <td>  <table>
                  <tr>
                    <th style=" font-weight: normal;">Housing</th>
                    <th style=" font-weight: normal;">Infrastructure</th>
                    <th style=" font-weight: normal;">Others</th>
                    <th style=" font-weight: normal;">Total</th>

                  </tr>
                  <tr>
                    <td>{{ $phase2->housing }}</td>
                    <td>{{ $phase2->infrastructure }}</td>
                    <td>{{ $phase2->other }}</td>
                    <td>{{ $phase2->total_project_cost }}</td>

                  </tr>
                </table></td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="total_project_cost" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">11</th>
          <td>No. of EWS beneficiaries covered in the project</td>
          <td>  <table>
                  <tr>
                    <th style=" font-weight: normal;">GEN</th>
                    <th style=" font-weight: normal;">SC</th>
                    <th style=" font-weight: normal;">ST</th>
                    <th style=" font-weight: normal;">OBC</th>
                    <th style=" font-weight: normal;">Minority</th>
                    <th style=" font-weight: normal;">Total</th>
                  </tr>
                  <tr>
                    <td>{{ $phase2->gen }}</td>
                    <td>{{ $phase2->sc }}</td>
                    <td>{{ $phase2->st }}</td>
                    <td>{{ $phase2->obc }}</td>
                    <td>{{ $phase2->minority }}</td>
                    <td>{{ $phase2->total_slum_household }}</td>
                  </tr>
                </table></td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="total_slum_household" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">12</th>
          <td>Whether beneficiaries have been selected as per PMAY guidelines?</td>
          <td>{{ $phase2->selected }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="selected" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">13</th>
          <td>Construction Cost of EWS Unit(Rs. in Lakhs)</td>
          <td>{{ $phase2->construction_cost }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="construction_cost" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">14</th>
          <td>Project Duration (in Months)</td>
          <td>{{ $phase2->project_duration }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="project_duration" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">15</th>
          <td>Whether sale price is provided by State?</td>
          <td>{{ $phase2->sales_price }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="sales_price" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">16</th>
          <td>Carpet area of EWS unit(in sqm)</td>
          <td>{{ $phase2->carpet_area }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="carpet_area" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17</th>
          <td>Total No. of houses proposed in the project</td>
          <td>{{ $phase2->total_houses }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="total_houses" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17.i</th>
          <td>No. of EWS unit</td>
          <td>{{ $phase2->ews_unit }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="ews_unit" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17.ii</th>
          <td>No. of LIG units</td>
          <td>{{ $phase2->lig_unit }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="lig_unit" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17.iii</th>
          <td>No. of MIG units</td>
          <td>{{ $phase2->mig_unit }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="mig_unit" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17.iv</th>
          <td>No. of HIG units.</td>
          <td>{{ $phase2->hig_unit }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="hig_unit" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">17.v</th>
          <td>No. of commercial units.</td>
          <td>{{ $phase2->commercial_unit }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="commercial_unit" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">18</th>
          <td>Whether open and transparent procedure has been envisaged to select private partner,if private partner has been considered?</td>
          <td>{{ $phase2->private_partner }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="private_partner" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">19</th>
          <td>No. of EWS houses eligible for central Assistance</td>
          <td>{{ $phase2->ews_eligible }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="ews_eligible" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.i</th>
          <td>GOI grant required(Rs.1.50 lakh per eligible EWS house)(Rs. in Lakhs)</td>
          <td>{{ $phase2->goi_grant }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="goi_grant" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.ii</th>
          <td>State grant (Rs. in Lakhs)</td>
          <td>{{ $phase2->state_grant }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="state_grant" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.ii.a</th>
          <td>Land Cost(Rs. in Lakhs)</td>
          <td>{{ $phase2->land_grant }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="land_grant" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.ii.b</th>
          <td>Cash Grant(Rs. in Lakhs)</td>
          <td>{{ $phase2->cash_grant }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="cash_grant" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.iii</th>
          <td>Implementing Agency Share(Rs. in Lakhs)</td>
          <td>{{ $phase2->implementing_agency_share }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="implementing_agency_share" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.iv</th>
          <td>Bemeficiary Share(Rs. in Lakhs)</td>
          <td>{{ $phase2->beneficiary_share }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="beneficiary_share" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">20.v</th>
          <td>Total(Rs. in Lakhs)</td>
          <td>{{ $phase2->total_share }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="total_share" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">21</th>
          <td>Whether Techn specifications/design for housing have been ensured as per Indian Standards/NBC/State norms?</td>
          <td>{{ $phase2->specifications }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="specifications" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">22</th>
          <td>Whether trunk infrastructure is existing or is being provided through AMRUT or any other scheme?</td>
          <td>{{ $phase2->trunk_infrastructure }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="trunk_infrastructure" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23</th>
          <td>Whether the provision of Civic infrastructure has been made as per applicable State norms/CPHEEO norms/IS Code/NBC?</td>
          <td></td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.i</th>
          <td>Water Supply</td>
          <td>{{ $phase2->water_supply }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="water_supply" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.ii</th>
          <td>Sewerage</td>
          <td>{{ $phase2->sewerage }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="sewerage" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.iii</th>
          <td>Road</td>
          <td>{{ $phase2->road }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="road" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.iv</th>
          <td>Storm water drain</td>
          <td>{{ $phase2->storm_water }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="storm_water" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.v</th>
          <td>External Electrification</td>
          <td>{{ $phase2->electrification }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="electrification" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.vi</th>
          <td>Solid Waste Management</td>
          <td>{{ $phase2->solid_waste }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="solid_waste" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.vii</th>
          <td>Any Other</td>
          <td>{{ $phase2->other_civic }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="other_civic" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">23.viii</th>
          <td>In case,any infrastructure hs not been proposed, reason thereof </td>
          <td>{{ $phase2->reason }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="reason" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">24</th>
          <td>Whether adequate social infrastructure facilities covered in the project?</td>
          <td>{{ $phase2->social_infrastructure }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="social_infrastructure" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">25</th>
          <td>Whether disaster(earthquake, flood ,cyclone,landslide etc.) resistant features have been adopted in concept , design and implementation of the project?</td>
          <td>{{ $phase2->disaster }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="disaster" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">26</th>
          <td>Whether Quality Assurance is part of the project?</td>
          <td>{{ $phase2->quality }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="quality" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">27</th>
          <td>Whether O&M is part of project?</td>
          <td>{{ $phase2->o_m }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="o_m" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">28</th>
          <td>Whether encumbrance free land is available for the Project?</td>
          <td>{{ $phase2->encumbrance }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="emcumbrance" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">29</th>
          <td>Whether any innovative/cost effective/Green technology adopted in the project?</td>
          <td>{{ $phase2->innovative }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="innovative" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">30</th>
          <td>Comments of SLAC after techno economic appraisal of DPR</td>
          <td>{{ $phase2->slac_comments }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="slac_comments" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">31</th>
          <td>Project brief including any other information ULB/State would like to furnish</td>
          <td>{{ $phase2->brief }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="brief" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">32</th>
          <td>Project Submission Date to SLMC</td>
          <td>{{ $phase2->submission_date }}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="submission_date" placeholder="Comment here" rows=1 cols=250></textarea>

            </div>
          </td>
        </tr>


      </tbody>
    </table>
        <div align="center">
            <a href="{{ route('nodal_phase1_save',$phase2->id) }}" name="final" value='save_final'><button type="button" class="btn btn-primary">Save</button></a>
            <button type="submit" class="btn btn-success" name="final" value='submit_final'>Submit</button>
        </div>
    @else
          <div align="center">
              <h1>Nothing to display</h1>
          </div>
      @endif
      </form>
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
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
