<html lang="en">
<head>
	<title>DPR Home</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/img/header.png">
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
    </style>
</head>
<body style="background-color: #7986CB">
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
                    <a href="#about-div" style="color: #212121;">About</a>
                </li>
            </ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{route('login')}}" style="color: #212121;">Login</a></li>
				<li><a href="{{route('register')}}" style="color: #212121;">Register</a></li>
			</ul>
		</div>
	</nav>

<div class="container-fluid" style="background-color: #7986CB">
    <div class="container" style="background-color: #7986CB">
        <div class="row">
            <div class="col-md-6">
                <p class="text-body-heading">Pradhan Mantri Awaas Yojana</p>
                <hr>
                <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:400px; border-radius: 15px;">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" style="border-radius: 15px;">
                        <div class="item active" style="border-radius: 15px;">
                            <img src="/img/pmay1.jpg" class="img-responsive" alt="PMAY1" style="width:auto; height:400px; display: block; margin-left: auto; margin-right: auto; border-radius: 15px;">
                        </div>

                        <div class="item" style="border-radius: 15px;">
                            <img src="/img/pmay3.jpg" class="img-responsive" alt="PMAY2" style="width:auto; height:400px; display: block; margin-left: auto; margin-right: auto; border-radius: 15px;">
                        </div>

                        <div class="item" style="border-radius: 15px;">
                            <img src="/img/pmay4.png" class="img-responsive" alt="PMAY3" style="width:auto; height:400px; display: block; margin-left: auto; margin-right: auto; border-radius: 15px;">
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev" style="border-radius: 15px;">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next" style="border-radius: 15px;">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <p class="text-body-heading">News, Events & Updates</p>
                <hr>
                <div class="news-bg">
                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>

                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>

                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>

                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>

                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>

                    <p class="text-news-date">
                        30/03/18
                    </p>
                    <p class="text-news-link">
                        Advisory for change in taxpayer type from SEZ to Regular or Regular to SEZ.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid about">
    <div class="container" style="line-height: 1.6; font-size: 1.1em;">
        <p class="text-body-heading text-center">
            About
        </p>
        <hr>
        <p class="text-about">
            Housing for all is the new and famous initiative of all the state government. To achieve this goal, every state government was launching new programs for the
            common citizens and residents of the state. The new name in the list in Maharashtra. Maharashtra Government was launching the
            Maharashtra Pradhan Mantri Awas Yojna 2017-18. This is the good news for all the poor people of Maharashtra who want to get their own
            house in affordable budget.
        </p>
        <div class="row" id="about-div">
            <div class="col-md-6">
                <p class="text-body-heading text-center">
                    Implementing Agency
                </p>
                <hr>
                <p>
                    <ul>
                        <li class="text-about" style="font-size: 1em;">
                            Implementing agencies (States/UTs/ULBs/Parastatals &
                            Central Govt. Agencies) would be required to prepare DPRs.
                        </li>
                        <li class="text-about" style="font-size: 1em;">
                            This DPR will then be verified by the Nodal Agency
                        </li>
                        <li class="text-about" style="font-size: 1em;">
                            There are three stages of verification or three verticals.
                        </li>
                        <li class="text-about" style="font-size: 1em;">
                            An implementing agency needs to fulfill all these stages in order to be verified completely.
                        </li>
                    </ul>
                </p>
            </div>
            <div class="col-md-6">
                <p class="text-body-heading text-center">
                    Nodal Agency
                </p>
                <hr>
                <p>
                <ul>
                    <li class="text-about" style="font-size: 1em;">
                        DPRs are to be submitted to the Ministry by the State
                        Level Nodal Agency (SLNA) with the approval of the
                        State Level Sanctioning & Monitoring Committee
                        (SLSMC) for sanction by a Central Sanctioning and
                        Monitoring Committee (CSMC).
                    </li>
                    <li class="text-about" style="font-size: 1em;">
                        This DPRs will then be verified by the Nodal Agency
                    </li>
                    <li class="text-about" style="font-size: 1em;">
                        There are three stages of verification or three verticals.
                    </li>
                    <li class="text-about" style="font-size: 1em;">
                        A Nodal Agency keeps the record of business transacted at each meeting of the Appraisal Committee and the Monitoring Committee.
                    </li>
                </ul>
                </p>
            </div>
        </div>
    </div>
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
