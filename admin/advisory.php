<!--<style type="text/css">

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

</style>-->
<script language="javascript" type="text/javascript">
// Roshan's Ajax dropdown code with php
// This notice must stay intact for legal use
// Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
// If you have any problem contact me at http://roshanbh.com.np
function getXMLHTTP() { //fuction to return the xml http object
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
    }
	
	function getState(countryId) {		
		
		var strURL="findState.php?country="+countryId;
		var req = getXMLHTTP();
		
		if (req) {
			
			req.onreadystatechange = function() {
				if (req.readyState == 4) {
					// only if "OK"
					if (req.status == 200) {						
						document.getElementById('statediv').innerHTML=req.responseText;						
					} else {
						alert("There was a problem while using XMLHTTP:\n" + req.statusText);
					}
				}				
			}			
			req.open("GET", strURL, true);
			req.send(null);
		}		
	}
</script>
<form action="saveadvisory.php" method="post">
Teacher<br />
<select name="teacher" class="ed">
<?php
include('../connect.php');
$result = mysqli_query($link,"SELECT * FROM teacher");
while($row = mysqli_fetch_array($result))
	{
	echo '<option value="'.$row['idnumber'].'">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</option>';
	}
?>
</select>
<br>
Level<br />
<select name="country" onChange="getState(this.value)" class="ed">
<option value="0">Select level</option>
<option value="Grade 1">Grade 1</option>
<option value="Grade 2">Grade 2</option>
<option value="Grade 3">Grade 3</option>
<option value="Grade 4">Grade 4</option>
<option value="Grade 5">Grade 5</option>
<option value="Grade 6">Grade 6</option>
<option value="1st year">1st year</option>
<option value="2nd year">2nd year</option>
<option value="3rd year">3rd year</option>
<option value="4th year">4th year</option>
</select>
<br>
Section<br>
<div id="statediv"><select name="state" class="ed" >
				<option>Select Method First</option>
					</select></div>
<br>
<input type="submit" name="Submit" value="save" id="button1" />
</form>