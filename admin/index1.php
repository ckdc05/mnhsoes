<?php
include "../connect.php";

$adminCount = 0;


function getDetails($target, $con){
    $sql = $con->prepare($target);
if($sql->execute()){
    $sql->bind_result($count);
    $sql->fetch();
    return $count;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maysan National High School</title>
    <style>
        *{
            margin:0;
            padding:0;
        }
        body{
            display:flex;
            gap:10px
            width:100%;
            height:100vh;
            background: none repeat scroll 0 0 darkslateblue;
	background-image: url("images/meetings-bg.jpg");
        }
        .sidepanel img{
            width:100px;
        }
       
        .sidepanel{
            position:fixed
            left:0;
            width:280px;
            background: #fff;
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.2);
            height:100vh;           
                }         
                .panel{
                    padding:10px;
                    width:100%;
                    height:80vh;
                    flex-direction: column;
                        display:flex;
                    justify-content: space-between;
                    /* border: 1px solid black; */
                    /* margin-top:25%;            */
                }
                .panel li{
                    height:45px;
                    display:flex;
                    align-items:center;
                    width: 85%;
                    color:#fff;
                    padding-left:10px;
                    font-weight:bold;
                    margin-bottom:20px;
                    margin-top:10px;
                    background: black;
                    cursor:pointer;
                }
                .panel a{
                    text-decoration:none;
                    color:#fff;
                    width: 100%;
                }
                .panel1{
                    padding:10px;
                    width:100%;
                    margin-top:120%;
                    margin-left:-10%;
                }

                .panel1 li{
                    height:40px;
                    display:flex;
                    align-items:center;
                    width: 85%;
                    color:#fff;
                    padding-left:10px;
                    font-weight:bold;
                    margin-bottom:10px;
                    background: red;
                    cursor:pointer;
                }
                .panel1 a{
                    text-decoration:none;
                    color:#fff;
                    width: 100%;
                }
        .container{
            width: 100%;
            padding:10px;
            display:flex;
            flex-direction:row;
            justify-content:center;
            gap:70px
        }
        .card{
            margin-top:5%;
            width: 250px;
            height:250px;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,.5);
            background:#fff;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
            gap:10px;
        }
        .card label{
            font-size:22px;
        }
        .card span{
            font-size:32px;
        }   
        .logout{
            text-align: center;
        }
       
    </style>
</head>
<body>

    <div class="sidepanel">
    
     <div class="none" style="margin-top:10px;">
     <center><img src="./images/maysan.jpg" alt="" srcset=""></center>  
     </div>
        <div class="panel">
      <div class="none">  <ul>
            <li><a href="profile.php">ADMIN</a></li>
            <li><a href="list_preenrol.php">PRE-ENROLLED</a></li>
            <li><a href="student.php">STUDENT LIST</a></li>
    </ul></div>
    <div class="none">
    <li><a href="../index.php" class="logout">LOGOUT</a></li>
    </div>
    </div>
    </div>


    <div class="container">
        <div class="card">
<img src="./images/xicon.png"/>         
<label>ADMIN</label> 
<span><?= getDetails("select count(*) from admin", $con) ?></span>      
        </div>
        <div class="card">
        <img src="./images/xicon.png"/>   
        <label>TOTAL PRE-ENROLLED</label> 
        
        <span><?= getDetails("select count(*) from prereg where status='pending'", $con) ?></span>            
        </div>
        <div class="card">
        <img src="./images/xicon.png"/>       
        <label>ENROLLED STUDENTS</label> 
        <span><?= getDetails("select count(*) from prereg where status='enrolled'", $con) ?></span>      
        </div>
    </div>
</body>
</html>