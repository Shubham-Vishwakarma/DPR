<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
</head>
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
<body>

<div class="container">

    <h1 class="text-center">PROJECTS</h1><br><br>

    <div class="tab">
	  <button class="tablinks" onclick="Checkstatus(event, 'Pending')">Pending Projects</button>
	  <button class="tablinks" onclick="Checkstatus(event, 'Completed')">Completed Projects</button>
	</div>

	<div id="Pending" class="tabcontent">
	  	<h3>Pending</h3>
	  	<div class="row">
	  		<div class="card">
			  <h5 class="card-header">Project name</h5>
			  <div class="card-body">
			    <h5 class="card-title">Short description of project</h5>
			    <p class="card-text">Date and status</p>
			    <a href="#" class="btn btn-primary">View Project</a>
			  </div>
			</div>
    	</div>
	</div>

	<div id="Completed" class="tabcontent">
	  	<h3>Completed</h3>
	  	<div class="row">
	        <div class="col-md-2">
	            <p>Project 1</p>
	        </div>
	        <div class="col-md-2">
	            <p>Project 2</p>
	        </div>
	        <div class="col-md-2">
	            <p>Project 3</p>
	        </div>
	        <div class="col-md-2">
	            <p>Project 4</p>
	        </div>
	        <div class="col-md-2">
	            <p>Project 5</p>
	        </div>
	        <div class="col-md-2">
	            <p>Project 6</p>
	        </div>
    	</div> 
	</div>

	<script>
	function Checkstatus(evt, status) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(status).style.display = "block";
	    evt.currentTarget.className += " active";
	}
	</script>

</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>