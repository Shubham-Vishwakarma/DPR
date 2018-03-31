
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
		
		$query = "select id,state_name, district_name, city_name, slum_name, project_name, project_code, nodal_agency, implementing_agency, agency_name, approval_date, project_cost, project_duration from phase1_comments
		where id in (select phase1_id from projects where implementing_agency_id in (select id from users where users.username = '".$user_name."'))";
		
		$result = mysqli_query($conn,$query);
		
		if(!$result){
		$count = 0;
		}else{
		$count = mysqli_num_rows($result);
		
		$i = 0;
		
		while($row=mysqli_fetch_assoc($result)){
			$i++;
			
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
			
			$response['proj'.$i] = $state_name.$district_name.$city_name.$slum_name.$project_name.$project_code.$nodal_agency.$implementing_agency.$agency_name.$approval_date.$project_cost.$project_duration;
		}
		}
		if(!$result){
		$response['push'] = "Not Success";
		}else{
		$response['push'] = "Success";
		}

?>