<?php
	require_once('../auth.php');
?>
<html>
<head>
<title>Online Enrollment</title>
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>

<script src="assets/js/sweetalert.js"></script>

  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<style>
	body {
	background: none repeat scroll 0 0 darkslateblue;
	background-image: url("images/meetings-bg.jpg");
    font: 14px/1.3 'Segoe UI',Arial,sans-serif;
    height: 100%;
    margin: 0;
    padding: 0;
    width: 100%;
	
    


}
#mainwrapper {
    background: none repeat scroll 0 0 #FFFFFF;
    border: 8px solid #EEEEEE;
    border-radius: 5px 5px 5px 5px;
    box-shadow: 0 0 10px #4E707C;
    font: 15px "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;
    margin: 5em auto;
    position: relative;
    text-align: left;
    width: 500px;
}
#mainwrapper h1 {
    background: none repeat scroll 0 0 #0092C8;
    border-bottom: 1px solid #007DAB;
    color: #FFFFFF;
    font-size: 20px;
    margin: 0;
    padding: 5px 10px;
    text-shadow: 0 1px 0 #007DAB;
}
	#header{
		position:absolute;
		top:0;
		padding:10px ;
		background-color: #252525;
		width:100%;
		background-image: url("twitter_web_sprite_bgs.png");
		background-repeat: repeat-x;
		color:#BBBBBB;
		font-size:11px;
		font-family:arial;
	}
	#headercontent{
		margin:0 auto;
		width:100%;
		text-align:center;
		float:left;
		padding-left: 10px;
	}
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

	h3{
		
		font-size: 15px;
		margin-left: 40%;
		text-align: center;
		font-family: "Roboto", sans-serif;
		
	}

	
	</style>
</head>
<body>
<script>
  swal("Welcome", "Admin", "success");

 </script>




<div id="mainwrapper" style="width: 50%; margin-top: 0.5%;">
	<h1>
	Welcome, Admin
	<div style="float:right; width:auto;"><a href="../index.php">Logout</a>
	</div>
	</h1>
	<div id="homecontent" style="width: 100%; margin-top: 0%; margin-bottom: -4%; margin-left: 5%;">
	<div style="float:left; width:auto; padding:10px;"><a href="profile.php" id="addq">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/Admin.png" height="65" width="80"><br><h3>ADMIN</h3></a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="list_preenrol.php" id="addq">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/preenrolled.png" height="65" width="80"><br><h3>PRE ENROLLED</h3></a></div>
	<div style="float:left; width:auto; padding:10px;"><a href="student.php" id="addq">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/student.png" height="65" width="80"><br><h3>STUDENT LIST</h3></a></div>
		<div class="clearfix"></div>




	</div>

</div>



</body>
</html>
