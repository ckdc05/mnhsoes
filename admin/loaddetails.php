<?php
include "../connect.php";

$sql = $con->prepare("SELECT count(*) FROM `admin`");
if($sql->execute()){
    $sql->bind_result($count);
    $sql->fetch();
    echo $count;
}
