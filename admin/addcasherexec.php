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
function createRandomPassword() {
					$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 3) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				$letter = createRandomPassword();
function numberletter() {
					$chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
					srand((double)microtime()*1000000);
					$i = 0;
					$passii = '' ;
					while ($i <= 2) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$passii = $passii . $tmp;
						$i++;
					}
					return $passii;
				}
				$ccnumbers = numberletter();
$idnum = 'TID-'.$letter.'-'.$ccnumbers;
$fname = clean($_POST['fname']);
$lname = clean($_POST['lname']);
$mname = clean($_POST['mname']);
$password = clean($_POST['password']);
$work = clean($_POST['work']);
$gender = clean($_POST['gender']);
$status = clean($_POST['status']);
$bday = clean($_POST['bday']);

mysqli_query($link,"INSERT INTO casher (fname, lname, mname, idnumber, work, gender, status, bday)
VALUES ('$fname','$lname','$mname','$idnum','$work','$gender','$status','$bday')");
mysqli_query($link,"INSERT INTO user (idnumber, password, position)
VALUES ('$idnum','$password','Casher')");
header("location: casher.php");
?>