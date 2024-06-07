<head>
<title>MAYSAN NATIONAL HIGH SCHOOL</title>
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
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<style>
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
#mainhhh h1 {
    background: none repeat scroll 0 0 #0092C8;
    border-bottom: 1px solid #007DAB;
    color: black;
    font-size: 14px;
    margin: 0;
    padding: 5px 10px;
    text-shadow: 0 1px 0 #007DAB;
}

body{
	background-image: url("images/meetings-bg.jpg");
}
</style>	
</head>
<body>
<div id="mainhhh" style="width: 98%; margin-top: 0.5%;">
<h1>
<a id="addq" href="index1.php" title="click to enter homepage" style="background-image:url('../images/out.png'); background-repeat:no-repeat; padding: 3px 12px 12px; margin-right: 10px; "></a>
	<label for="filter">Filter</label> <input type="text" name="filter" value="" id="filter" />
</h1>
		<table cellpadding="1" cellspacing="1" id="resultTable">
			<thead>
				<tr>
					<th  style="border-left: 1px solid #FFFFFF"> Name </th>
					
					<th>Address</th>
					
					<th>Date</th>
					<th>Age</th>
					<th>Card Photo</th>
					<th>PSA Photo</th>
					<th> Action </th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('../connect.php');
				$result = mysqli_query($link,"SELECT * FROM prereg WHERE status='pending' ORDER BY id ASC");
				while($row = mysqli_fetch_array($result))
					{
						echo '<tr class="record">';
						echo '<td  style="border-left: 1px solid #C1DAD7">'.$row['fname'].' '.$row['mname'].' '.$row['lname'].'</td>';
						
						echo '<td><div align="left">'.$row['address'].'</div></td>';
						echo '<td><div align="left">'.$row['Date'].'</div></td>';
						echo '<td><div align="left">'.$row['age'].'</div></td>';
						echo '<td><div align="left">'.$row['photo'].'</div></td>';
						echo '<td><div align="left">'.$row['photo'].'</div></td>';
						echo '<td><div align="center"><a rel="facebox" href="accept.php?id='.$row['id'].'">Accept</a></div></td>';
						echo '</tr>';
					}
				?> 
			</tbody>
		</table>

</div>
</body>
</html>