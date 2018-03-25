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
          <td>Maharashtra</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" placeholder="Comment here" rows=1 cols=100></textarea>
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
          <td>Jalgaon</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" placeholder="Comment here" rows=1 cols=100></textarea>
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
          <td>Date of approval by State Level Sanctioning and Monitoring Committee (SLSMC)</td>
          <td>---</td>
          <td class="align-items-center">
            <div class="input-group ">
              <textarea class="form-control" placeholder="Comment here" rows=1 cols=100></textarea>
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
  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
