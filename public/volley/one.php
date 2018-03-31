
<?php
	$db_name = "dpr";
	$mysql_user = "root";
	$mysql_pass = "";
	$server_name = "localhost";
	
	$conn = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
	
	$response = array();
	
	if(!$conn){
		//echo ("Connection Error");
		$response['conn'] = "Connection Issue";
	}
	
	else{
		//echo ("Connection Success!");
		$response['conn'] = "Connection Success";
	}
	
	$state_name = $_POST['state_name'];
	$district_name = $_POST['district_name'];
	$city_name = $_POST['city_name'];
	$slum_name = $_POST['slum_name'];
	$project_name = $_POST['project_name'];
	$project_code = $_POST['project_code'];
	$nodal_agency = $_POST['nodal_agency'];
	$implementing_agency = $_POST['implementing_agency'];
	$agency_name = $_POST['agency_name'];
	$approval_date = $_POST['approval_date'];
	$project_cost = $_POST['project_cost'];
	$project_duration = $_POST['project_duration'];
		
		$response['recMail'] = $emailVar;
		
		$query = "INSERT INTO phase1 (id, state_name, district_name, city_name, slum_name, project_name, project_code, nodal_agency, implementing_agency, agency_name, approval_date, project_cost, project_duration) VALUES (NULL, '".$state_name."', '".$district_name."', '".$city_name."', '".$slum_name."', '".$project_name."', '".$project_code."', '".$nodal_agency."', '".$implementing_agency."', '".$agency_name."', '".$approval_date."', '".$project_cost."', '".$project_duration."')";
		
		$result = mysqli_query($conn,$query);
		
		if(!$result){
		$response['push'] = "Not Success";
		}else{
		$response['push'] = "Success";
		}

?>