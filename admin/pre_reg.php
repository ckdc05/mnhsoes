
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
<script type="text/javascript">
function validateForm()
{
  {
  alert("Your ID number and password will send to your email address when the casher confirm your enrollment");
  }
}
</script>

<form action="save_pre_reg.php" method="post" onsubmit="return validateForm()">
Firstname <br />
<input name="fname" type="text" class="ed" id="brnu" />
<br>
Lastname <br />
<input name="lname" type="text" class="ed" id="brnu" />
<br>
Middlename <br />
<input name="mname" type="text" class="ed" id="brnu" />
<br>
Gender<br />
<select name="gender" class="ed">
<option>Male</option>
<option>Female</option>
</select>
<br>
Email<br />
<input name="email" type="text" class="ed" id="brnu" />
<br>
Address <br />
<textarea name="address" class="ed"></textarea>
<br>
Age<br />
<input name="age" type="text" class="ed" id="brnu" />
<br>
Birthday<br />
<select name="month" class="ed">
<option>Month</option>
<?php
$N = 13;
for($i=1; $i < $N; $i++)
{
echo '<option>'.$i.'</option>';
}
?>
</select>
/
<select name="day" class="ed">
<option>Days</option>
<?php
$N = 32;
for($i=1; $i < $N; $i++)
{
echo '<option>'.$i.'</option>';
}
?>
</select>
/
<select name="year" class="ed">
<option>Year</option>
<?php
$N = 2020;
for($i=1889; $i < $N; $i++)
{
echo '<option>'.$i.'</option>';
}
?>
</select>
<br>
Level<br />
<select name="level" class="ed">
<option>Grade 1</option>
<option>Grade 2</option>
<option>Grade 3</option>
<option>Grade 4</option>
<option>Grade 5</option>
<option>Grade 6</option>
<option>1st year</option>
<option>2nd year</option>
<option>3rd year</option>
<option>4th year</option>
</select>
<br>
Payment Mode<br />
<select name="paymode" class="ed">
<option>Full Payment</option>
<option>Installment</option>
</select>
<br>
Family Income (monthly)<br />
<select name="fincome" class="ed">
<option>12,000 - 19,000</option>
<option>20,000 - 29,000</option>
<option>30,000 - 39,000</option>
<option>40,000 - 49,000</option>
<option>50,000 - 59,000</option>
<option>60,000 - 69,000</option>
<option>70,000 - 79,000</option>
<option>80,000 - 89,000</option>
<option>90,000 - 99,000</option>
<option>100,000 - above</option>
</select>
<br>
Mother's Name <br />
<input name="moname" type="text" class="ed" id="brnu" />
<br>
Occupation <br />
<input name="moccu" type="text" class="ed" id="brnu" />
<br>
Father's Name <br />
<input name="faname" type="text" class="ed" id="brnu" />
<br>
Occupation <br />
<input name="foccu" type="text" class="ed" id="brnu" />
<br>
Religion <br />
<input name="religiom" type="text" class="ed" id="brnu" />
<br>
School Year<br>
<select name="syear" class="ed">
<option>School Year</option>
<?php
$N = 2020;
for($i=1991; $i < $N; $i++)
{
$p=$i+1;
echo '<option>'.$i.'-'.$p.'</option>';
}
?>
</select>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>
