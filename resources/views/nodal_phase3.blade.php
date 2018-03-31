<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="icon" href="/img/header.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        <li class="breadcrumb-item"><a href="#">Phase3 {ID}</a></li>
      </ol>
    </nav>
      <h1 class="display-4">Phase 3 Verification</h1><br/>

      @if($phase3)
      <form class="form-horizontal" method="POST" action="{{ route('nodal_phase3',$phase3->id) }}">
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
              <td>{{ $phase3->state_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='state_name' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Name of District</td>
              <td>{{ $phase3->district_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='district_name' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
 name='district_name'              <th scope="row">3</th>
              <td>Name of City</td>
              <td>{{ $phase3->city_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='city_name' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
          name='city_name'   <tr>
              <th scope="row">4</th>
              <td>Project Name</td>
              <td>{{ $phase3->project_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='project_name' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            <name='project_name' /tr>
            <tr>
              <th scope="row">5</th>
              <td>Project Code</td>
              <td>{{ $phase3->project_code }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='project_code' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>State Level Nodal Agency</td>
              <td>{{ $phase3->nodal_agency }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='nodal_agency' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Implementing Agency</td>
              <td>{{ $phase3->implementing_agency }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='implementing_agency' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Implementing Agency Name</td>
              <td>{{ $phase3->implementing_agency_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='implementing_agency_name' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Project Cost(Rs. In Lakhs)</td>
              <td>{{ $phase3->project_cost }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='project_cost' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>No. of beneficiaries covered in the project</td>
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
                        <td>{{ $phase3->gen }}</td>
                        <td>{{ $phase3->sc }}</td>
                        <td>{{ $phase3->st }}</td>
                        <td>{{ $phase3->obc }}</td>
                        <td>{{ $phase3->minority }}</td>
                        <td>{{ $phase3->total_slum_household }}</td>
                      </tr>
                    </table></td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='table_bene_covered' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">10.i</th>
              <td>No. of beneficiaries (New Construction)</td>
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
                        <td>{{ $phase3->construct_gen }}</td>
                        <td>{{ $phase3->construct_sc }}</td>
                        <td>{{ $phase3->construct_st }}</td>
                        <td>{{ $phase3->construct_obc }}</td>
                        <td>{{ $phase3->construct_minority }}</td>
                        <td>{{ $phase3->construct_total_slum_household }}</td>
                      </tr>
                    </table></td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='table_bene_new' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">10.ii</th>
              <td>No. of beneficiaries (Enhancement)</td>
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
                        <td>{{ $phase3->enhancement_gen }}</td>
                        <td>{{ $phase3->enhancement_sc }}</td>
                        <td>{{ $phase3->enhancement_st }}</td>
                        <td>{{ $phase3->enhancement_obc }}</td>
                        <td>{{ $phase3->enhancement_minority }}</td>
                        <td>{{ $phase3->enhancement_total_slum_household }}</td>
                      </tr>
                    </table></td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='table_bene_enhance' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">11</th>
              <td>Whether beneficiaries have been selected as per PMAY guidelines?</td>
              <td>{{ $phase3->selected_PMAY }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='selected_PMAY' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">12</th>
              <td>Whether it has been ensured that selected beneficiaries have rightful ownership of the land?</td>
              <td>{{ $phase3->ownership }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='ownership' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13</th>
              <td>Whether building plan for all houses have been approved?</td>
              <td>{{ $phase3->approved }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name='approved' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.i</th>
              <td>GoI grant required (Rs. 1.5 lakh per eligible beneficiary) (Rs. In Lakhs)</td>
              <td>{{ $phase3->goi_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="goi_grant" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.ii</th>
              <td>State grant, if any (Rs. In Lakhs)</td>
              <td>{{ $phase3->state_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <div class="input-group-append">
                    <textarea class="form-control" name='state_grant' placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.iii</th>
              <td>ULB grant, if any (Rs. In Lakhs)</td>
              <td>{{ $phase3->ulb_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="ulb_grant" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.iv</th>
              <td>Beneficiary Share (Rs. In Lakhs)</td>
              <td>{{ $phase3->beneficiary_share }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="beneficiary_share" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.v</th>
              <td>Total (Rs. In Lakhs)</td>
              <td>{{ $phase3->total_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="total_grant" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td>Whether technical specification/design for housing have been ensured as per Indian Standards/NBC/ State norms?</td>
              <td>{{ $phase3->specifications }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="specification" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">15</th>
              <td>Whether it has been ensured that balance cost of construction is tied up with State Grant, ULB Grant & Beneficiary Share</td>
              <td>{{ $phase3->balance_cost }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="balance_cost" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16</th>
              <td>Whether trunk and line infrastructure is existing or being provisioned</td>
              <td></td>
              <td class="align-items-center">

              </td>
            </tr>
            <tr>
              <th scope="row">16.i</th>
              <td>Water Supply</td>
              <td>{{ $phase3->water_supply }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="water_supply" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.ii</th>
              <td>Sewerage</td>
              <td>{{ $phase3->sewerage }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="sewerage" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.iii</th>
              <td>Road</td>
              <td>{{ $phase3->road }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="road" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.iv</th>
              <td>Storm Water Drain</td>
              <td>{{ $phase3->storm_drain_water }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="storm_drain_water" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.v</th>
              <td>External Electrification</td>
              <td>{{ $phase3->electrification }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="electrification" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.vi</th>
              <td>Solid Waste Management</td>
              <td>{{ $phase3->solid_waste }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="solid_waste" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.vii</th>
              <td>Any other, specify</td>
              <td>{{ $phase3->other_infrastructure }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="other_infrastructure" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.viii</th>
              <td>In case, any infrastructure has not been proposed, reasons thereof</td>
              <td>{{ $phase3->reasons }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="reasons" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">17</th>
              <td>Whether disaster (earthquake, flood, cyclone, landslide etc.) resistant features have been adopted in concept, design and implementation of the project?</td>
              <td>{{ $phase3->disaster }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="disaster" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">18</th>
              <td>Whether Demand Survey completed for entire city?</td>
              <td>{{ $phase3->survey }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="survey" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">19</th>
              <td>Whether City-wide integrated project have been formulated?</td>
              <td>{{ $phase3->city_wide }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="city_wide" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">20</th>
              <td>Whether validation with SECC data for housing condition conducted?</td>
              <td>{{ $phase3->secc }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="secc" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">21</th>
              <td>Whether Direct Benefit Transfer(DBT) of fund to individual bank account of beneficiary ensured in the project?</td>
              <td>{{ $phase3->dbt }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="dbt" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">22</th>
              <td>Whether there is provision in DPR for tracking/monitoring the progress of individual houses through geo-tagged photographs?</td>
              <td>{{ $phase3->tracking }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="tracking" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">23</th>
              <td>Whether any innovative/cost effective/Green technology adopted in the project?</td>
              <td>{{ $phase3->innovative }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="innovative" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">24</th>
              <td>Comments of SLAC after techno economic appraisal of DPR</td>
              <td>{{ $phase3->slac_comments }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="slac_comments" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">25</th>
              <td>Project brief including any other information ULB/State would like to furnish</td>
              <td>{{ $phase3->project_brief }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="project_brief" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">26</th>
              <td>Project Submission Date to SLSMC</td>
              <td>{{ $phase3->submission_date }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" name="submission_date" placeholder="Comment here" rows=1 cols=250></textarea>

                </div>
              </td>
            </tr>
          </tbody>
        </table>
          <div align="center">
            <a href="{{ route('nodal_phase3_save',$phase3->id) }}" name='final' value='save_final'><button type="button" class="btn btn-primary">Save</button></a>
            <button type="submit" class="btn btn-success" name='final' value='submit_final'>Submit</button>
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
