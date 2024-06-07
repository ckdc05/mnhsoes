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
$level = clean($_POST['level']);
$numsec = clean($_POST['numsec']);
$maxnumsec= clean($_POST['maxnumsec']);
mysqli_query($link,"INSERT INTO sectioning(level, numsec, maxnumpersec) VALUES ('$level','$numsec','$maxnumsec')");
for($i=1; $i <= $numsec; $i++)
	{
	mysqli_query($link,"INSERT INTO avesection (level, section, maxnumber) VALUES ('$level','$i','$maxnumsec')");
	}
header("location: sectiondetails.php");
?>