<html lang="en">
<head>
    <title>Nodal Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Raleway Heading Font-->
    <link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet">

    <!-- Bigshot One Heading-->
    <link href="https://fonts.googleapis.com/css?family=Bigshot+One" rel="stylesheet">

    <!-- Font Awesome Icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        p {
            font-family: 'Slabo 27px', serif;
        }

        .text-header{
            font-family: 'Bigshot One', cursive;
            font-size: 4em;
        }

        .text-footer-heading{
            color: #69F0AE;
            font-size: 1.6em;
            font-weight: 600;
        }

        .text-footer{
            color: #CFD8DC;
            font-size: 1.2em;
        }

        .text-body-heading{
            color: #B9F6CA;
            font-size: 1.6em;
            font-weight: 600;
        }

        .text-news-date{
            color: #757575;
            text-align: left;
            font-size: 1.2em;
        }

        .text-news-link{
            text-align: left;
            font-size: 1.2em;
            color: #00796B;
        }

        .news-bg{
            background-color: #E1F5FE;
            border-radius: 15px;
            padding-left: 2em;
            padding-top: 2em;
            padding-right: 2em;
            padding-bottom: 2em;
        }

        .about{
            margin: 1em 0em 0em 0em;
            background-color: #5C6BC0;
            padding: 1em 1em 1em 1em;
        }

        .text-about{
            text-align: left;
            font-size: 1.2em;
            color: #E0E0E0;
        }

        /* Dropdown Button */
        .dropbtn {
            background-color: #C5CAE9;
            color: white;
            padding: 14px;
            border: none;
            cursor: pointer;
        }

        /* Dropdown button on hover & focus */
        .dropbtn:hover, .dropbtn:focus {
            background-color: #283593;
        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {background-color: #ddd}

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {display:block;}
    </style>

    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.dropbtn')) {

                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }
    </script>
</head>

<body style="background-color: #7986CB;">

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
                <a href="#" style="color: #212121;">PMAY Home</a>
            </li>
            <li>
                <a href="#" style="color: #212121;">Services</a>
            </li>
            <li>
                <a href="#about-div" style="color: #212121;">About</a>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{route('login')}}" style="color: #212121;">Logout</a></li>
            <li>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"><i class="fa fa-user-circle-o" style="font-size:24px; color: black;"></i></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="container">
    <nav class="navbar" style="background-color: #BDBDBD">
        <div class="">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#pending" data-toggle="tab">Pending</a></li>
                <li><a href="#completed" data-toggle="tab">Completed</a></li>
            </ul>
        </div>
    </nav>
</div>

<div class="container-fluid" style="background-color: #7986CB; min-height: 500px;">
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="pending" style="margin-top:20px">

                <div class="row cm-fix-height">
                    @forelse($pendings as $pending)
                        <div class="col-sm-4">
                            <div class="panel panel-default">

                                <div class="panel-heading">Project Id {{ $pending->id }}</div>
                                <div class="panel-body">
                                    <blockquote style="margin:0">
                                        <p>Implementing agency:  {{ $pending->implementing_agency_id }}</p>
                                        <footer>
                                            <cite title="Source Title">Phase1 Status: {{ $pending->phase1_status }}</cite>
                                            <cite title="Source Title">Phase2 Status: {{ $pending->phase2_status }}</cite>
                                            <cite title="Source Title">Phase3 Status: {{ $pending->phase3_status }}</cite>
                                        </footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div align="center">
                            <p>No Pending Projects</p>
                        </div>
                    @endforelse
                </div>
            </div>
            <div class="tab-pane fade" id="completed" style="margin-top:20px;">
                <div class="row cm-fix-height">
                    @forelse($completed as $complete)
                        <div class="col-sm-4">
                            <div class="panel panel-default">

                                <div class="panel-heading">Project Id {{ $complete->id }}</div>
                                <div class="panel-body">
                                    <blockquote style="margin:0">
                                        <p>Imolementing agency:  {{ $pending->implementing_agency_id }}</p>
                                        <footer><cite title="Source Title">Status: </cite></footer>
                                    </blockquote>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div align="center">
                            <p>No Completed Projects</p>
                        </div>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
</div>
<script src="{{ asset('js/jquery-2.1.3.min.js') }}"></script>
<script src="{{ asset('js/jquery.mousewheel.min.js') }}"></script>
<script src="{{ asset('js/jquery.cookie.min.js') }}"></script>
<script src="{{ asset('js/fastclick.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/clearmin.min.js') }}"></script>
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
