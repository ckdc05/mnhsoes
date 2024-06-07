<?php
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


<!--
.ed{
border-style:solid;
border-width:thin;
border-color:black;
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

#main{
	position: absolute;
	width: 30em;
	margin-left: 30%;
	margin-top: 5%;
}
-->
</style>

</head>

<body>

 
	
	<!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
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
    <script src="script.js"></script> <!-- Optional JS file for hover effect -->
              </div>
          </div>
      </div>
  </header>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	
		<div id="main" style="padding:50px; text-align:center; font-family:arial; border: thick double #32a1ce; border-radius: 30px;">

		<form action="login.php" method="post">
		Username<br>
		<input type="text" name="id" class="ed"><br>
		Password<br>
		<input type="password" name="password" class="ed"><br>
		<input type="submit" value="Login" id="button1">
		</form>
</div>
		<div id="footer">
		</div>
		<div class="clearfix"></div>
	</div>



</body>
</html>



