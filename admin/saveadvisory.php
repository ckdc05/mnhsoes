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
$teacher = clean($_POST['teacher']);
$country = clean($_POST['country']);
$state = clean($_POST['state']);

mysqli_query($link,"INSERT INTO advisory (tid, level, section)
VALUES ('$teacher','$country','$state')");
header("location: index.php");
?>