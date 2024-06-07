<?php
include('../connect.php');
$id=$_GET['id'];
$result = mysqli_query($link,"SELECT * FROM teacher where id='$id'");

while($row = mysqli_fetch_array($result))
  {
	$idnum=$row['idnumber'];
	$password=$row['password'];
	$fname=$row['fname'];
	$lname=$row['lname'];
	$mname=$row['mname'];
	$birth=$row['bday'];
	$status=$row['status'];
	$gender=$row['gender'];
	$work=$row['work'];
  }
?>
<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<form name="myForm" action="editinfoexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id?>" />
ID Number <br />
<input name="idnum" type="text" class="ed" id="brnu" value="<?php echo $idnum?>" />
<br>
Password <br />
<input name="password" type="password" class="ed" id="brnu" value="<?php echo $password?>" />
<br>
Firstname <br />
<input name="fname" type="text" class="ed" id="brnu" value="<?php echo $fname?>" />
<br>
Lastname <br />
<input name="lname" type="text" class="ed" id="brnu" value="<?php echo $lname?>" />
<br>
Middlename <br />
<input name="mname" type="text" class="ed" id="brnu" value="<?php echo $mname?>" />
<br>
Birthdate<br />
<input name="birth" type="text" class="ed" id="brnu" value="<?php echo $birth?>" />
<br>
Status <br />
<input name="stat" type="text" class="ed" id="brnu" value="<?php echo $status?>" />
<br>
Gender <br />
<select name="gender" class="ed">
<option><?php echo $gender?></option>
<option>Male</option>
<option>Female</option>
</select>
<br>
Work <br />
<input name="work" type="text" class="ed" id="brnu" value="<?php echo $work?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
