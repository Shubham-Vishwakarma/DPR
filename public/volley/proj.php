<?php

	//Usrname, email, id
	//Pending, Completed
	
	$db_name = "dpr";
	$mysql_user = "root";
	$mysql_pass = "";
	$server_name = "localhost";
	
	$conn = mysqli_connect($server_name, $mysql_user, $mysql_pass, $db_name);
	
	$response = array();
	$p1 = array();
	$p2 = array();
	$p3 = array();
	$done = array();
	
	if(!$conn){
		//echo ("Connection Error");
		$response['conn'] = "Connection Issue";
	}
	
	else{
		//echo ("Connection Success!");
		$response['conn'] = "Connection Success";
	}
		
		$query = "select * from projects where implementing_agency_id = '".$id."'";
		
		$result = mysqli_query($conn,$query);
		
		if(!$result){
		$count = 0;
		}else{
		$count = mysqli_num_rows($result);
		
		$i = 0;
		
		while($row=mysqli_fetch_assoc($result)){
			$i++;
			$curr = $row['id'];
			if($row['phase1_status'] == 0){
				array_push($p1, $curr);
			}else if($row['phase2_status'] == 0){
				array_push($p2, $curr);
			}else if($row['phase3_status'] == 0){
				array_push($p3, $curr);
			}else{
				array_push($done, $curr);
			}
			
			//$response['proj'.$i] = $state_name.$district_name.$city_name.$slum_name.$project_name.$project_code.$nodal_agency.$implementing_agency.$agency_name.$approval_date.$project_cost.$project_duration;
		}
		$response['p1'] = $p1;
		$response['p2'] = $p2;
		$response['p3'] = $p3;
		$response['done'] = $done;
		}
		
		$response['count1'] = count($p1);
		$response['count2'] = count($p2);
		$response['count3'] = count($p3);
		$response['countdone'] = count($done);
		
		if(!$result){
		$response['push'] = "Not Success";
		}else{
		$response['push'] = "Success";
		}
		
		echo json_encode($response);

?>