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
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>Name of District</td>
              <td>{{ $phase3->district_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Name of City</td>
              <td>{{ $phase3->city_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">4</th>
              <td>Project Name</td>
              <td>{{ $phase3->project_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Project Code</td>
              <td>{{ $phase3->project_code }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>State Level Nodal Agency</td>
              <td>{{ $phase3->nodal_agency }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">7</th>
              <td>Implementing Agency</td>
              <td>{{ $phase3->implementing_agency }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">8</th>
              <td>Implementing Agency Name</td>
              <td>{{ $phase3->implementing_agency_name }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Project Cost(Rs. In Lakhs)</td>
              <td>{{ $phase3->project_cost }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
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
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
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
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
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
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">11</th>
              <td>Whether beneficiaries have been selected as per PMAY guidelines?</td>
              <td>{{ $phase3->selected_PMAY }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">12</th>
              <td>Whether it has been ensured that selected beneficiaries have rightful ownership of the land?</td>
              <td>{{ $phase3->ownership }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13</th>
              <td>Whether building plan for all houses have been approved?</td>
              <td>{{ $phase3->approved }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.i</th>
              <td>GoI grant required (Rs. 1.5 lakh per eligible beneficiary) (Rs. In Lakhs)</td>
              <td>{{ $phase3->goi_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.ii</th>
              <td>State grant, if any (Rs. In Lakhs)</td>
              <td>{{ $phase3->state_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.iii</th>
              <td>ULB grant, if any (Rs. In Lakhs)</td>
              <td>{{ $phase3->ulb_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.iv</th>
              <td>Beneficiary Share (Rs. In Lakhs)</td>
              <td>{{ $phase3->beneficiary_share }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">13.v</th>
              <td>Total (Rs. In Lakhs)</td>
              <td>{{ $phase3->total_grant }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td>Whether technical specification/design for housing have been ensured as per Indian Standards/NBC/ State norms?</td>
              <td>{{ $phase3->specifications }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">15</th>
              <td>Whether it has been ensured that balance cost of construction is tied up with State Grant, ULB Grant & Beneficiary Share</td>
              <td>{{ $phase3->balance_cost }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
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
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.ii</th>
              <td>Sewerage</td>
              <td>{{ $phase3->sewerage }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.iii</th>
              <td>Road</td>
              <td>{{ $phase3->road }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.iv</th>
              <td>Storm Water Drain</td>
              <td>{{ $phase3->storm_drain_water }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.v</th>
              <td>External Electrification</td>
              <td>{{ $phase3->electrification }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">26.vi</th>
              <td>Solid Waste Management</td>
              <td>{{ $phase3->solid_waste }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.vii</th>
              <td>Any other, specify</td>
              <td>{{ $phase3->other_infrastructure }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">16.viii</th>
              <td>In case, any infrastructure has not been proposed, reasons thereof</td>
              <td>{{ $phase3->reasons }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">17</th>
              <td>Whether disaster (earthquake, flood, cyclone, landslide etc.) resistant features have been adopted in concept, design and implementation of the project?</td>
              <td>{{ $phase3->disaster }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">18</th>
              <td>Whether Demand Survey completed for entire city?</td>
              <td>{{ $phase3->survey }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">19</th>
              <td>Whether City-wide integrated project have been formulated?</td>
              <td>{{ $phase3->city_wide }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">20</th>
              <td>Whether validation with SECC data for housing condition conducted?</td>
              <td>{{ $phase3->secc }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">21</th>
              <td>Whether Direct Benefit Transfer(DBT) of fund to individual bank account of beneficiary ensured in the project?</td>
              <td>{{ $phase3->dbt }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">22</th>
              <td>Whether there is provision in DPR for tracking/monitoring the progress of individual houses through geo-tagged photographs?</td>
              <td>{{ $phase3->tracking }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">23</th>
              <td>Whether any innovative/cost effective/Green technology adopted in the project?</td>
              <td>{{ $phase3->innovative }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">24</th>
              <td>Comments of SLAC after techno economic appraisal of DPR</td>
              <td>{{ $phase3->slac_comments }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">25</th>
              <td>Project brief including any other information ULB/State would like to furnish</td>
              <td>{{ $phase3->project_brief }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
            <tr>
              <th scope="row">26</th>
              <td>Project Submission Date to SLSMC</td>
              <td>{{ $phase3->submission_date }}</td>
              <td class="align-items-center">
                <div class="input-group ">
                  <textarea class="form-control" placeholder="Comment here" rows=1 cols=250></textarea>
                  <div class="input-group-append">
                    <button class="btn btn-outline-success" type="button">Yes</button>
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-outline-danger" type="button">No</button>
                  </div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
          <center><button type="submit" class="btn btn-primary">Submit</button></center><br />
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
</body>
