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
<?php
$vbvb=$_GET['id'];
include('../connect.php');
$result = mysqli_query($link,"SELECT * FROM prereg WHERE id='$vbvb'");
while($row = mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$mname=$row['mname'];
		$lname=$row['lname'];
		$Date=$row['Date'];
		$email=$row['email'];
		$address=$row['address'];
		$age=$row['age'];
		$idnumber=$row['idnumber'];
		$religion=$row['religion'];
		$level=$row['level'];
		
		$mother=$row['mother'];
		$mo=$row['m_occupation'];
		$father=$row['father'];
		$fo=$row['f_occopation'];
	}
?>
<form action="edit_pre_reg.php" method="post">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $vbvb ?>" />
Firstname <br />
<input name="fname" type="text" class="ed" id="brnu" value="<?php echo $fname ?>" />
<br>
Lastname <br />
<input name="lname" type="text" class="ed" id="brnu" value="<?php echo $lname ?>" />
<br>
Middlename <br />
<input name="mname" type="text" class="ed" id="brnu" value="<?php echo $mname ?>" />
<br>
Date of Registration<br />
<input name="Date" type="text" class="ed" id="brnu" value="<?php echo $Date ?>" />
<br>
Email<br />
<input name="email" type="text" class="ed" id="brnu" value="<?php echo $email ?>" />
<br>
Address <br />
<textarea name="address" class="ed"><?php echo $address ?></textarea>
<br>
Age<br />
<input name="age" type="text" class="ed" id="brnu" value="<?php echo $age ?>" />
<br>

Level<br />
<select name="level" class="ed">
<option><?php echo $level ?></option>
<option>1st year</option>
<option>2nd year</option>
<option>3rd year</option>
<option>4th year</option>
</select>
<br>
Section <br />
<input name="section" type="text" class="ed" id="brnu" value="<?php echo $mother ?>" />
<br>
Mother's Name <br />
<input name="moname" type="text" class="ed" id="brnu" value="<?php echo $mother ?>" />
<br>
Occupation <br />
<input name="moccu" type="text" class="ed" id="brnu" value="<?php echo $mo ?>" />
<br>
Father's Name <br />
<input name="faname" type="text" class="ed" id="brnu" value="<?php echo $father ?>" />
<br>
Occupation <br />
<input name="foccu" type="text" class="ed" id="brnu" value="<?php echo $fo ?>" />
<br>
Religion <br />
<input name="religiom" type="text" class="ed" id="brnu" value="<?php echo $religion ?>" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>