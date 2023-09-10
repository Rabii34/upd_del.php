<?php

include('connect.php');

  $userid = $_GET['id'];



$delete = "delete  from `descript`  where id = '$userid'";

$result = mysqli_query($connect, $delete);
if(!$result){
    die("query failed");
}
header('location:http://localhost/products/production.php');

?>