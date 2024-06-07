
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
<form name="myForm" action="addteacherexec.php" method="post" enctype="multipart/form-data" name="addroom" onsubmit="return validateForm()">
Firstname <br />
<input name="fname" type="text" class="ed" id="brnu" />
<br>
Lastname <br />
<input name="lname" type="text" class="ed" id="brnu" />
<br>
Middlename <br />
<input name="mname" type="text" class="ed" id="brnu" />
<br>
Password <br />
<input name="password" type="text" class="ed" id="brnu" />
<br>
Work<br />
<select name="work" class="ed">
<option>Full Time</option>
<option>Part Time</option>
</select>
<br>
Gender<br />
<select name="gender" class="ed">
<option>Male</option>
<option>Female</option>
</select>
<br>
Status<br />
<select name="status" class="ed">
<option>Single</option>
<option>Married</option>
</select>
<br>
Birthday<br />
<input name="bday" type="text" class="ed" id="brnu" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
