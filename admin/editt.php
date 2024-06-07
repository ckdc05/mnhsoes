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
<form action="edittexec.php" method="post">
<input name="id" type="hidden" class="ed" id="brnu" value="<?php echo $_GET['id']; ?>" />
Payable<br>
<input name="payable" type="text" class="ed" id="brnu" value="<?php echo $_GET['price']; ?>" /><br>
<input type="submit" name="Submit" value="Send" id="button1" />
</form>