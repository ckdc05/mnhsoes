<?php
include('../connect.php');

//Function to sanitize values received from the form. Prevents SQL injection
function clean($str) {
	global $link;
	$str = @trim($str);
	$str = stripslashes($str);
	return mysqli_real_escape_string($link,$str);
}
//Sanitize the POST values
$id = clean($_POST['id']);
$expl = clean($_POST['expl']);
$level= clean($_POST['level']);
$date=date("Y-m-d");
$result = mysqli_query($link,"SELECT * FROM prereg WHERE idnumber='$id'");
				while($row = mysqli_fetch_array($result))
					{
					$dsds=$row['schoolyear'];
					}
mysqli_query($link,"INSERT INTO offences(date, level, idnumber, explanation, schoolyear) VALUES ('$date','$level','$id','$expl','$dsds')");
header("location: listofoffences.php");
?>