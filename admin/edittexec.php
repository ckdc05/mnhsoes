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
$payable = clean($_POST['payable']);
mysqli_query($link,"UPDATE tuetion SET payable='$payable' WHERE id='$id'");
header("location: tuetion.php");
?>