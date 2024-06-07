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
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$mname = clean($_POST['mname']);
$email = clean($_POST['email']);
$date = clean($_POST['date']);
$level = clean($_POST['level']);
$moname = clean($_POST['moname']);
$moccu = clean($_POST['moccu']);
$faname = clean($_POST['faname']);
$foccu = clean($_POST['foccu']);
$sec= clean($_POST['section']);
$add = clean($_POST['address']);
$age = clean($_POST['age']);
$id = clean($_POST['id']);
$religiom = clean($_POST['religiom']);
mysqli_query($link,"UPDATE prereg SET fname='$fname', lname='$lname', mname='$mname', level='$level', date='$date',  mother='$moname', m_occupation='$moccu', father='$faname', f_occopation='$foccu', section='$sec', email='$email', address='$add', age='$age', religion='$religiom' WHERE id='$id'");
header("location: student.php");
?>