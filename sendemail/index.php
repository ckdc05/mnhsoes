<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Send email</title>
</head>
<style>

body{
	background-image: url("images/meetings-bg.jpg");
	box-sizing: border-box;
    font-family: 'poppins', sans-serif;
    margin: 0;
    padding: 0;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: #32cd9c;
}

h3{
	font-weight: bold;
}


.btn{
	font-weight: bold;
	
}


.container{
    width: 400px;
    background-color: #ADE1FB;
    border-radius: 8px;
    padding: 30px;
    text-align: center;
}

.container input{
    width: 100%;
    padding: 10px;
    border: none;
    border-bottom: 2px solid #777777;
    margin-bottom: 20px;
    font-size: 16px;
    outline: none;
}


.container h3{
	font-family: 'poppins', sans-serif;
	font-size: 120%;
}
</style>





<body>
	<div class="container">
	<h1> Gmail Notification</h1>
	<form class="" action="send.php" method="post">

		<h3>EMAIL</h3> <input type="email" style="padding: 7px;" name="email" placeholder="Example00@gmail.com" value=""> 
		<h3>SUBJECT</h3> <input type="text" style="padding: 7px;" name="Subject" placeholder="Maysan NHS" value="">	
		<h3>MESSAGE</h3> <input type="text" style="padding: 7px;" name="message" placeholder="Insert Message" value="">	
		
		<div class="btn">
			<br>
		<button type="submit" style="background: #1E90FF; border-radius: 5px; padding: 0px; color: #fff; text-transform: uppercase; width: 100px;" name="send"><h2>Send</h2></button>
		


	</form>



</body>
</html>