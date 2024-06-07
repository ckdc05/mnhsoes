<?php



/* Database config */

$db_host		= 'localhost';
$db_user		= 'root';
$db_pass		= '';
$db_database	= 'enrolment'; 

/* End config */

$con = new mysqli($db_host,$db_user,$db_pass,$db_database);

if($con){
    mysqli_error($con);
}


$link = mysqli_connect($db_host,$db_user,$db_pass,$db_database) or die('Unable to establish a DB connection');

mysqli_query($link,"SET names UTF8");

?>