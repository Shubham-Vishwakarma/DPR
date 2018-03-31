
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
	
	$dummy = 1;
	
	if ((isset($_POST['emailPost']) && isset($_POST['passPost'])) ){
		$emailVar = $_POST['emailPost'];
		$passVar = $_POST['passPost'];
		
		$response['recMail'] = $emailVar;
		
		$result = mysqli_query($conn,"SELECT * from users where email = '".$emailVar."'");
		
		if(!$result){
		$count = 0;
		}else{
		$count = mysqli_num_rows($result);
		}
		
		if($count == 1){
		    $row=mysqli_fetch_assoc($result);
		    $Uname = $row['username'];
			$response['success'] = 1;
			$response['message'] = 'Account exists';
			$response['Uname'] = $Uname;
			echo json_encode($response);
		}else{
			$response['success'] = 0;
			$response['Uname'] = "incorrect userNaem";
			$response['message'] = 'Account doesn\'t exist';
			echo json_encode($response);
		}
	}

?>