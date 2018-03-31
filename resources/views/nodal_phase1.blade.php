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
        <li class="breadcrumb-item"><a href="#">Phase1 {ID}</a></li>
      </ol>
    </nav>
      <h1 class="display-4">Phase 1 Verification</h1><br />

  @if($phasedata)
      <form class="form-horizontal" method="POST" action="{{ route('nodal_phase1',$phasedata->id) }}">
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
          <td>{{$phasedata->state_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="state_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Name of District</td>
          <td>{{$phasedata->district_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="district_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Name of City</td>
          <td>{{$phasedata->city_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="city_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>

        <tr>
          <th scope="row">3</th>
          <td>Name of the Slum</td>
          <td>{{$phasedata->slum_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="slum_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">4</th>
          <td>Project Name</td>
          <td>{{$phasedata->project_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="project_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">5</th>
          <td>Project Code *</td>
          <td>{{$phasedata->project_code}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="project_code" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">6</th>
          <td>State Level Nodal Agency</td>
          <td>{{$phasedata->nodal_agency}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="nodal_agency" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">7</th>
          <td>Implementing Agency</td>
          <td>{{$phasedata->implementing_agency}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="implementing_agency" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Implementing Agency Name</td>
          <td>{{$phasedata->agency_name}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="agency_name" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>
        <tr>
          <th scope="row">8</th>
          <td>Date of approval by State Level Sanctioning and Monitoring Committee (SLSMC)</td>
          <td>{{$phasedata->approval_date}}</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" name="approval_date" placeholder="Comment here" rows=1 cols=250></textarea>
            </div>
          </td>
        </tr>

          <tr>
            <th scope="row">9</th>
            <td>Project Cost (Rs. In Lakhs)</td>
            <td>{{$phasedata->project_cost}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="project_cost" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">10</th>
            <td>Project Duration (in months)</td>
            <td>{{$phasedata->project_duration}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="project_duration" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">11.i</th>
            <td>Status of slum <br />(1 if notified, 2 if recognised and 3 if identified)</td>
            <td>{{$phasedata->slum_status}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="slum_status" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">11.ii</th>
            <td>Total slum area (Sqm.)</td>
            <td>{{$phasedata->total_slum_area}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="total_slum_area" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">11.iii</th>
            <td>Area under slum rehabilitation (Sqm.)</td>
            <td>{{$phasedata->rehabilitation_area}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="rehabilitation_area" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">11.iv</th>
            <td>Slum Population</td>
            <td>{{$phasedata->slum_population}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="slum_population" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">12</th>
            <td>No. of existing slum households</td>
            <td>
              <h6><center>ABC Basti</center> </h6>
              <table>
                    <tr>
                      <th style=" font-weight: normal;">GEN</th>
                      <th style=" font-weight: normal;">SC</th>
                      <th style=" font-weight: normal;">ST</th>
                      <th style=" font-weight: normal;">OBC</th>
                      <th style=" font-weight: normal;">Minority</th>
                      <th style=" font-weight: normal;">Total</th>
                    </tr>
                    <tr>
                      <td>{{$phasedata->gen}}</td>
                      <td>{{$phasedata->sc}}</td>
                      <td>{{$phasedata->st}}</td>
                      <td>{{$phasedata->obc}}</td>
                      <td>{{$phasedata->minority}}</td>
                      <td>{{$phasedata->total_slum_household}}</td>
                    </tr>
                  </table>
          </td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="total_slum_household" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">13</th>
            <td>No. of eligible slum households</td>
            <td><h6><center>ABC Basti</center> </h6>
            <table>
                  <tr>
                    <th style=" font-weight: normal;">GEN</th>
                    <th style=" font-weight: normal;">SC</th>
                    <th style=" font-weight: normal;">ST</th>
                    <th style=" font-weight: normal;">OBC</th>
                    <th style=" font-weight: normal;">Minority</th>
                    <th style=" font-weight: normal;">Total</th>
                  </tr>
                  <tr>
                    <td>{{$phasedata->gen_eli}}</td>
                    <td>{{$phasedata->sc_eli}}</td>
                    <td>{{$phasedata->st_eli}}</td>
                    <td>{{$phasedata->obc_eli}}</td>
                    <td>{{$phasedata->minority_eli}}</td>
                    <td>{{$phasedata->total_slum_household_eli}}</td>
                  </tr>
                </table></td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="total_slum_household_eli" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">14</th>
            <td>No. of houses proposed (slum
rehabilitation only) with carpet
area</td>
            <td>{{$phasedata->houses_proposed}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="houses_proposed" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">15</th>
            <td>Whether beneficiary have been
selected as per PMAY guidelines?
(Yes/No)</td>
            <td>{{$phasedata->selected_PMAY}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="selected_PMAY" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">16</th>
            <td>Whether private partner has
been selected through open
competitive bidding? If yes, date
of bidding</td>
            <td>{{$phasedata->private_partner_selected}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="private_partner_selected" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">17</th>
            <td>Incentives to Private Partner</td>
            <td></td>
            <td class="align-items-center">

            </td>
          </tr>
          <tr>
            <th scope="row">17.i</th>
            <td>Existing FSI in the area</td>
            <td>{{$phasedata->existing_fsi}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="existing_fsi" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">17.ii</th>
            <td>FSI provided in the project</td>
            <td>{{$phasedata->provided_fsi}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="provided_fsi" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">17.iii</th>
            <td>Other Incentives, if any</td>
            <td>{{$phasedata->other_incentives}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="other_incentives" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">18.i</th>
            <td>GoI grant required (Rs. 1.0 lakh per eligible slum dweller) (Rs. In Lakhs)</td>
            <td>{{$phasedata->goi_grant}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="goi_grant" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">18.ii</th>
            <td>State grant, if any (Rs. In Lakhs)</td>
            <td>{{$phasedata->state_grant}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="state_grant" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">18.iii</th>
            <td>ULB grant, if any (Rs. In Lakhs)</td>
            <td>{{$phasedata->ulb_grant}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="ulb_grant" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">18.iv</th>
            <td>Beneficiary Share (Rs. In Lakhs)</td>
            <td>{{$phasedata->beneficiary_share}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="beneficiary_share" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">18.v</th>
            <td>Total (Rs. In Lakhs)</td>
            <td>{{$phasedata->total_grant}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="total_grant" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">19</th>
            <td>Whether technical
specification/design for housing
have been ensured as per Indian
Standards/NBC/ State norms?</td>
            <td>{{$phasedata->specification}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="specification" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">20</th>
            <td>Type of temporary arrangement
for beneficiaries during
construction period provided in
the project (Rent / Transit
Shelter)</td>
            <td>{{$phasedata->temporary}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="temporary" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">21</th>
            <td>Whether trunk infrastructure is
existing or is being provided
through AMRUT or any other
scheme? (Yes/No)</td>
            <td>{{$phasedata->trunk_infrastructure}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="trunk_infrastructure" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22</th>
            <td>Whether the provision of Civic
infrastructure has been made as
per applicable State
norms/CPHEEO norms/IS
Code/NBC?</td>
            <td></td>
            <td class="align-items-center">
            </td>
          </tr>
          <tr>
            <th scope="row">22.i</th>
            <td>Water Supply (Yes/No)</td>
            <td>{{$phasedata->water_supply}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="water_supply" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.ii</th>
            <td>Sewerage (Yes/No)</td>
            <td>{{$phasedata->sewerage}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="sewerage" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.iii</th>
            <td>Road (Yes/No)</td>
            <td>{{$phasedata->road}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="road" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.iv</th>
            <td>Storm Water Drain (Yes/No)</td>
            <td>{{$phasedata->storm_water_drain}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="storm_water_drain" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.v</th>
            <td>External Electrification
(Yes/No)</td>
            <td>{{$phasedata->electrification}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="electrification" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.vi</th>
            <td>Solid Waste Management
(Yes/No)</td>
            <td>{{$phasedata->solid_waste}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="solid_waste" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.vii</th>
            <td>Any other, specify</td>
            <td>{{$phasedata->other_infrastructure}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="other_infrastructure" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">22.viii</th>
            <td>In case, any infrastructure
has not been proposed, reasons
thereof</td>
            <td>{{$phasedata->reasons}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="reasons" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">23</th>
            <td>Whether disaster (earthquake,
flood, cyclone, landslide etc.)
resistant features have been
adopted in concept, design and
implementation of the project?</td>
            <td>{{$phasedata->disaster}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="disaster" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">24</th>
            <td>Whether Quality Assurance is
part of the Project, if not, how it
is proposed to be ensured?</td>
            <td>{{$phasedata->quality}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="quality" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">25</th>
            <td>Whether O&M is part of Project,
if yes, for how many years?</td>
            <td>{{$phasedata->o_and_m}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="o_and_m" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">26</th>
            <td>Whether encumbrance free land
is available for the project or
not?</td>
            <td>{{$phasedata->encumbrance}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="encumbrance" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">27</th>
            <td>Whether any innovative/cost
effective/Green technology
adopted in the project?</td>
            <td>{{$phasedata->innovative}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="innovative" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">28</th>
            <td>Comments of SLAC after techno
economic appraisal of DPR</td>
            <td>{{$phasedata->slac_comments}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="slac_comments" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">29</th>
            <td>Project brief including any other
information ULB/State would like
to furnish</td>
            <td>{{$phasedata->project_brief}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="project_brief" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">29</th>
            <td>Project Submission Date</td>
            <td>{{$phasedata->sub_date}}</td>
            <td class="align-items-center">
              <div class="input-group ">
                <textarea class="form-control" name="sub_date" placeholder="Comment here" rows=1 cols=250></textarea>
              </div>
            </td>
          </tr>

      </tbody>
    </table>

        <div>
           <button type="submit" value="resend" name="button" class="btn btn-primary">Resend</button>
          <button type="submit" value="submit" name="button" class="btn btn-primary">Submit</button>
        </div>

  </form>
  @else
      <div align="center">
          <h1>Nothing to display</h1>
      </div>
  @endif

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
