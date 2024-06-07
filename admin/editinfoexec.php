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
$work = clean($_POST['work']);
$get = mysqli_query($link,"SELECT * FROM teacher WHERE id='$id'");
$res = mysqli_fetch_assoc($get);
mysqli_query($link,"UPDATE teacher SET idnumber='$idnum', password='$password', mname='$mname', lname='$lname', fname='$fname', bday='$birth', status='$stat', gender='$gender', work='$work' WHERE id='$id'");
mysqli_query($link,"UPDATE user SET idnumber='$idnum', password='$password' WHERE idnumber='{$res['idnumber']}'");
header("location: teacher.php");
?>