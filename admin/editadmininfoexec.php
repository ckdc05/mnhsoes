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
$idnum = clean($_POST['idnum']);
$password = clean($_POST['password']);
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$mname = clean($_POST['mname']);
$birth = clean($_POST['birth']);
$stat = clean($_POST['stat']);
$gender = clean($_POST['gender']);

mysqli_query($link,"UPDATE admin SET idnum='$idnum', password='$password', mname='$mname', lname='$lname', fname='$fname', birth='$birth', status='$stat', gender='$gender' WHERE id='$id'");
header("location: profile.php");
?>