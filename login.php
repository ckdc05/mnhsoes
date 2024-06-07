<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	include('connect.php');
	
	
	//Function to sanitize values received from the form. Prevents SQL injection
	function clean($str) {
		global $link;
		$str = @trim($str);
		$str = stripslashes($str);
		return mysqli_real_escape_string($link,$str);
	}
	
	//Sanitize the POST values
	$login = clean($_POST['name']);
	$password = clean($_POST['password']);
	$position = "admin";
	$result = mysqli_query($link,"SELECT * FROM user WHERE idnumber='$login' AND password='$password'");
	while($row = mysqli_fetch_array($result))
		{
		$position = $row['position'];
		}
		// echo $position; exit;
	if ($position=='admin')
	{
		//Create query
		$qry="SELECT * FROM admin WHERE idnum='$login' AND password='$password'";
		$result=mysqli_query($link,$qry);
		//while($row = mysqli_fetch_array($result))
	//  {
	//  $level=$row['position'];
	//  }
		//Check whether the query was successful or not
		if($result) {
			if(mysqli_num_rows($result) > 0) {
				//Login Successful
				session_regenerate_id();
				$member = mysqli_fetch_assoc($result);
				$_SESSION['SESS_MEMBER_ID'] = $member['id'];
				session_write_close();
				//if ($level="admin"){
				header("location: admin/index1.php");
				exit();
			}else {
				//Login failed
				header("location: loginform.php");
				exit();
			}
		}else {
			die("Query failed");
		}

		
		
	}
	
?>

