<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>Maysan National High School</title>
<link rel="stylesheet" href="../css/main.css" type="text/css" media="screen" />
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
    <link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">

<script src="js/application.js" type="text/javascript" charset="utf-8"></script>
<style>

body {
	background-image: url("admin/images/meetings-bg.jpg");
}

#mainhhh {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 8px solid #EEEEEE;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 10px #4E707C;
    font: 11px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
    margin: 5em auto;
    position: relative;
    text-align: left;
    width: 1000px;
	
}
 h1 {
    background: none repeat scroll 0 0 #0092C8;
    border-bottom: 1px solid #007DAB;
    color: #FFFFFF;
    font-size: 15px;
    margin: 0;
    padding: 5px 10px;
    text-shadow: 0 1px 0 #007DAB;
}

#kiki{
	background-image: url("assets/images/meetings-bg.jpg");
}

</style>	
</head>
<body>

<h1>
<a id="addq" href="index1.php" title="click to enter homepage" style="background-image:url('../images/out.png'); background-repeat:no-repeat; background-position: 10%; margin-left: 1%; padding: 10px 12px 12px; margin-right: 20px;"></a>
<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
	<a rel="facebox" href="pre_reg.php" id="addq">Add Pre Enrolled Student</a>
	 
</h1>
	
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th  style="border-left: 1px solid #C1DAD7"> Name </th>
					
					<th>Birthday</th>
					<th>Email</th>
					<th>Address</th>
					<th>Age</th>
					<th>Religion</th>
					<th>Date of Registration</th>
					<th>Level</th>		
					<th>School Year</th>
					<th>Mother</th>
					<th>Father</th>
					<th>Status</th>
					<th>Card</th>
					<th>PSA</th>		
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../connect.php');
				$result = mysqli_query($link,"SELECT * FROM prereg");
				while($row = mysqli_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
						
						echo '<td><div align="left">'.$row['bday'].'</div></td>';
						
						echo '<td><div align="left">'.$row['email'].'</div></td>';
						echo '<td><div align="left">'.$row['address'].'</div></td>';
						echo '<td><div align="left">'.$row['age'].'</div></td>';
						
						echo '<td><div align="left">'.$row['religion'].'</div></td>';
						echo '<td><div align="left">'.$row['Date'].'</div></td>';
						echo '<td><div align="left">'.$row['level'].'</div></td>';
						
						echo '<td><div align="left">'.$row['schoolyear'].'</div></td>';
						echo '<td><div align="left">'.$row['mother'].'('.$row['m_occupation'].')</div></td>';
						echo '<td><div align="left">'.$row['father'].'('.$row['f_occopation'].')</div></td>';
						echo '<td><div align="left">'.$row['status'].'</div></td>';
						echo '<td><div align="left">'.$row['photo'].'</div></td>';
						echo '<td><div align="left">'.$row['photo'].'</div></td>';
						
						echo '<td><div align="center"><a rel="facebox" href="editsprofile.php?id='.$row['id'].'" title="Click To Edit">Edit Profile</a> | <a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
						echo '</tr>';
					}
				?> 
					
			</tbody>
		</table>
</div>	
<script src="js/jquery.js"></script>
  <script type="text/javascript">
$(function() {

$(".delbutton").click(function(){
//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");
//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {

 $.ajax({
   type: "GET",
   url: "deleteteacher.php",
   data: info,
   success: function(){
   
   }

 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>
