<?php
include('connect.php');

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
$gender = clean($_POST['gender']);
$status = 'pending';
$bday = clean($_POST['month']).'/'.clean($_POST['day']).'/'.clean($_POST['year']);
$level = clean($_POST['level']);

$moname = clean($_POST['moname']);
$moccu = clean($_POST['moccu']);
$faname = clean($_POST['faname']);
$foccu = clean($_POST['foccu']);
$sec='none';
$photo='images/.jpg';
$add = clean($_POST['address']);
$age = clean($_POST['age']);
$religiom = clean($_POST['religiom']);
$date = clean($_POST['date']);
$syear = clean($_POST['syear']);
$result = mysqli_query($link,"SELECT * FROM tuetion WHERE level='$level'");
	while($row = mysqli_fetch_array($result))
		{
		if ($paymode=='Full Payment'){
		$payables=($row['payable']-($row['payable']*.05));
		}
		else if ($paymode=='Installment'){
		$payables=$row['payable'];
		}
		}
mysqli_query($link,"INSERT INTO prereg (fname, lname, mname, level, gender, payable, mother, m_occupation, father, f_occopation, status, email, bday, address, age, religion, date, photo, schoolyear)
VALUES ('$fname','$lname','$mname','$level','$date','$gender','$moname','$moccu','$faname','$foccu','$status','$email','$bday','$add','$age','$religiom','$date','$photo','$syear')");
header("location: index.php");
?>