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

$email = clean($_POST['email']);
$id = clean($_POST['id']);
$level = clean($_POST['level']);

mysqli_query($link,"UPDATE prereg SET status='enrolled' WHERE id='$id'");
mysqli_query($link,"UPDATE avesection SET maxnumber=maxnumber-1 WHERE level='$level' AND section='$sec'");
mysqli_query($link,"INSERT INTO user (idnumber, password, position)
VALUES ('$idnumber','$password','student')");
header("location: list_preenrol.php");
$mail_To = $email;
$mail_Subject = "Enrolment notification";
$mail_Body = "ID Number: $idnumber\n".
"Password: $password\n".
"Note: You Can now login to your Account Using the IDnumber and password above\n ";
mail($mail_To, $mail_Subject, $mail_Body);
?>