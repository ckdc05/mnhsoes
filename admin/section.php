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
<form action="sectioning.php" method="post">
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
Number of Section: <br />
<input name="numsec" type="text" class="ed" id="brnu" />
<br>
Maximum Number of Student Per Section: <br />
<input name="maxnumsec" type="text" class="ed" id="brnu" />
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>