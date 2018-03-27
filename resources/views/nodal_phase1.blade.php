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
        <li class="breadcrumb-item"><a href="#">Phase1 {ID}</a></li>
      </ol>
    </nav>
      <h1 class="display-4">Phase 1 Verification</h1><br />
    <!-- <div class="row align-items-center format">
      <div class="col-4 border">Name of the State </div>
      <div class="col-5 border">Maharashtra</div>
      <div class="col-3">
        <div class="input-group ">
          <textarea class="form-control" placeholder="Comment here" rows=1></textarea>
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="button">Yes</button>
          </div>
          <div class="input-group-append">
            <button class="btn btn-outline-danger" type="button">No</button>
          </div>
        </div>
      </div>
    </div>
    <div class="row align-items-center format">
      <div class="col-4 border">Date of approval by State Level Sanctioning and Monitoring Committee (SLSMC) </div>
      <div class="col-5 border">Maharashtra</div>
      <div class="col-3">
        <div class="input-group ">
          <textarea class="form-control" placeholder="Comment here" rows=1></textarea>
          <div class="input-group-append">
            <button class="btn btn-outline-success" type="button">Yes</button>
          </div>
          <div class="input-group-append">
            <button class="btn btn-outline-danger" type="button">No</button>
          </div>
        </div>

      </div>
    </div>
  -->
  @if($phasedata)
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
          <td>---</td>
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
          <td>Name of City</td>
          <td>{{$phasedata->city_name}}</td>
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
          <td>Name of the Slum</td>
          <td>{{$phasedata->slum_name}}</td>
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
          <td>{{$phasedata->project_name}}</td>
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
          <td>Project Code *</td>
          <td>{{$phasedata->project_code}}</td>
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
          <td>{{$phasedata->nodal_agency}}</td>
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
          <td>Implementing Agency (Urban Local Body/ Development Authority/ Housing Board/ Urban Improvement Trust/ Designated Slum Rehabilitation Agency/ Private agency/ Developer)</td>
          <td>{{$phasedata->implementing_agency}}</td>
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
          <td>--</td>
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
          <td>Date of approval by State Level
Sanctioning and Monitoring
Committee (SLSMC)</td>
          <td>{{$phasedata->approval_date}}</td>
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
            <td>Project Cost (Rs. In Lakhs)</td>
            <td>{{$phasedata->project_cost}}</td>
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
            <td>Project Duration (in months)</td>
            <td>{{$phasedata->project_duration}}</td>
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
            <th scope="row">11.i</th>
            <td>Status of slum <br />(Please write: 1 if notified, 2 if recognised and 3 if identified)</td>
            <td>{{$phasedata->slum_status}}</td>
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
            <th scope="row">11.ii</th>
            <td>Total slum area (Sqm.)</td>
            <td>{{$phasedata->total_slum_area}}</td>
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
            <th scope="row">11.iii</th>
            <td>Area under slum rehabilitation (Sqm.)</td>
            <td>{{$phasedata->rehabilitation_area}}</td>
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
            <th scope="row">11.iv</th>
            <td>Slum Population</td>
            <td>{{$phasedata->slum_population}}</td>
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
                  <h6><center>ABC Basti</center> </h6>
                  <table >
                    <tr>
                      <th style=" font-weight: normal;">GEN</th>
                      <th style=" font-weight: normal;">SC</th>
                      <th style=" font-weight: normal;">ST</th>
                      <th style=" font-weight: normal;">OBC</th>
                      <th style=" font-weight: normal;">Minority</th>
                      <th style=" font-weight: normal;">Total</th>
                    </tr>
                        <tr>
                          <td>69</td>
                          <td>1016</td>
                          <td>4</td>
                          <td>134</td>
                            <td>-</td>
                          <td>1223</td>
                        </tr>
                      </table>
          </td>
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
                    <td>{{$phasedata->gen}}</td>
                    <td>{{$phasedata->sc}}</td>
                    <td>{{$phasedata->st}}</td>
                    <td>{{$phasedata->obc}}</td>
                    <td>{{$phasedata->minority}}</td>
                    <td>{{$phasedata->total_slum_household}}</td>
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
            <th scope="row">14</th>
            <td>No. of houses proposed (slum
rehabilitation only) with carpet
area</td>
            <td>{{$phasedata->houses_proposed}}</td>
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
            <td>Whether beneficiary have been
selected as per PMAY guidelines?
(Yes/No)</td>
            <td>{{$phasedata->selected_PMAY}}</td>
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
            <td>Whether private partner has
been selected through open
competitive bidding? If yes, date
of bidding</td>
            <td>{{$phasedata->private_partner_selected}}</td>
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
            <th scope="row">17.ii</th>
            <td>FSI provided in the project</td>
            <td>{{$phasedata->provided_fsi}}</td>
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
            <th scope="row">17.iii</th>
            <td>Other Incentives, if any</td>
            <td>{{$phasedata->other_incentives}}</td>
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
            <th scope="row">18.i</th>
            <td>GoI grant required (Rs. 1.0 lakh
per eligible slum dweller) (Rs. In
Lakhs)</td>
            <td>{{$phasedata->goi_grant}}</td>
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
            <th scope="row">18.ii</th>
            <td>State grant, if any (Rs. In
Lakhs)</td>
            <td>{{$phasedata->state_grant}}</td>
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
            <th scope="row">18.iii</th>
            <td>ULB grant, if any (Rs. In Lakhs)</td>
            <td>{{$phasedata->ulb_grant}}</td>
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
            <th scope="row">18.iv</th>
            <td>Beneficiary Share (Rs. In
Lakhs)</td>
            <td>{{$phasedata->beneficiary_share}}</td>
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
            <th scope="row"></th>
            <td>Total (Rs. In Lakhs)</td>
            <td>{{$phasedata->total_grant}}</td>
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
            <td>Whether technical
specification/design for housing
have been ensured as per Indian
Standards/NBC/ State norms?</td>
            <td>{{$phasedata->specification}}</td>
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
            <td>Type of temporary arrangement
for beneficiaries during
construction period provided in
the project (Rent / Transit
Shelter)</td>
            <td>{{$phasedata->temporary}}</td>
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
            <td>Whether trunk infrastructure is
existing or is being provided
through AMRUT or any other
scheme? (Yes/No)</td>
            <td>---</td>
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
            <td>Whether the provision of Civic
infrastructure has been made as
per applicable State
norms/CPHEEO norms/IS
Code/NBC?</td>
            <td>---</td>
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
            <th scope="row">22.i</th>
            <td>Water Supply (Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.ii</th>
            <td>Sewerage (Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.iii</th>
            <td>Road (Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.iv</th>
            <td>Storm Water Drain (Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.v</th>
            <td>External Electrification
(Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.vi</th>
            <td>Solid Waste Management
(Yes/No)</td>
            <td>---</td>
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
            <th scope="row">22.vii</th>
            <td>Any other, specify</td>
            <td>---</td>
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
            <th scope="row">22.viii</th>
            <td>In case, any infrastructure
has not been proposed, reasons
thereof</td>
            <td>---</td>
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
            <td>Whether disaster (earthquake,
flood, cyclone, landslide etc.)
resistant features have been
adopted in concept, design and
implementation of the project?</td>
            <td>---</td>
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
            <td>Whether Quality Assurance is
part of the Project, if not, how it
is proposed to be ensured?</td>
            <td>---</td>
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
            <td>Whether O&M is part of Project,
if yes, for how many years?</td>
            <td>---</td>
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
            <td>Whether encumbrance free land
is available for the project or
not?</td>
            <td>---</td>
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
            <th scope="row">27</th>
            <td>Whether any innovative/cost
effective/Green technology
adopted in the project?</td>
            <td>---</td>
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
            <th scope="row">28</th>
            <td>Comments of SLAC after techno
economic appraisal of DPR</td>
            <td>---</td>
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
            <th scope="row">29</th>
            <td>Project brief including any other
information ULB/State would like
to furnish</td>
            <td>---</td>
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
            <th scope="row">29</th>
            <td>Project Submission Date</td>
            <td>---</td>
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
  <center>  <button type="submit" class="btn btn-primary">Submit</button></center>
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
