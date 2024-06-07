<?php
$id=$_GET['id'];
include('../connect.php');
$result = mysqli_query($link,"SELECT * FROM prereg WHERE id='$id'");
	while($row = mysqli_fetch_array($result))
		{
		$payables=$row['payable'];
		$email=$row['email'];
		$level=$row['level'];
		}
function createRandomPassword() {
    $chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode=createRandomPassword();
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

<form action="confirm.php" method="post">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $id; ?>" />
<input name="level" type="hidden" class="ed" id="brnu" value="<?php echo $level; ?>" />


Email: <br />
<input name="email" type="text" class="ed" id="brnu" value="<?php echo $email; ?>" readonly/>
<br>
<br>
Gmail Message:
<br>
<input type="text" style="padding: 15px; box-sizing: content-box;" name="message" placeholder="Insert Message" value="">


<h4> REQUIREMENTS </h4>
Card Photo: <input type="checkbox" name="req" value="Card"><br>
&nbsp;PSA Photo: <input type="checkbox" name="req" value="psa"><br>

<?php

$result = mysqli_query($link,"SELECT * FROM avesection WHERE maxnumber!='0' AND level='$level'");
while($row = mysqli_fetch_array($result))
	{
		echo '<option>'.$row['section'].'</option>';
	}
?> 


</select><br>
<br>
<input type="submit" name="Submit" value="Send" id="button1" />
</form>