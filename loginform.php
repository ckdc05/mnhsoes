<?php

$nameError = "";
$passwordError = "";

	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
	
?>


<html>
<head>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Online Enrollment System of MNHS</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-edu-meeting.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">
	
	

	

<link rel="stylesheet" href="css/main.css" />
<style type="text/css">

.ed{
border-style:solid;
border-width:thin;
border-color:black;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:New Times Roman, Bold, serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:2px;

height: 34px;
}

#main{
	position: absolute;
	width: 30em;
	margin-left: 30%;
	margin-top: 5%;
}

body{
background-image: url("assets/images/meetings-bg.jpg");"
background-repeat: no-repeat;
background-size: 1366px;
}

h4{
	color: white;
}







</style>
</head>

<body>





	 <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" style="margin-top: -3% ">
      <div class="container">
          <div class="row">
              <div class="col-12">
                  <nav class="main-nav">
                      <!-- ***** Logo Start ***** -->

                
                      <a href="index.php" class="logo">
                          MNHS
                      </a>

                      <!-- ***** Logo End ***** -->
                      
                   
    
        
    </form>

    <script src="script.js"></script> 
              </div>
          </div>
      </div>
  </header>
	
	<br>
	<br>
	<br>
	<br>

<div style= "border: 10px solid; border-color: black; border-radius: 10%; text-align: center; width: 40%; margin-left: 30%; margin-top: 10%;">


		<form action="login.php" method="post">
		<div>
		<br><h4>Username<br></h4>
		<input type="text" name="name" placeholder="Username" required><br>
</div>
		<br>
		<div>	
		<h4>Password<br></h4>
		<input type="password" name="password" placeholder="Password" required><br><br>
</div>
		<h4><input type="submit" value="LOGIN" id="button1"></h4>
		</form>
		
</div>
</div>
		<div id="footer">
		</div>	
		<div class="clearfix"></div>
	</div>

	

</body>
</html>
