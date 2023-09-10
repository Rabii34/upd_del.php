<?php

include('connect.php');

$user_id = $_GET['id'];



$del = "DELETE from `descript` where id = '$user_id' ";

$res = mysqli_query($connect, $del);
if(!$res){
    echo "query failed";
}else{
    header('location:trash.php');
}

?>