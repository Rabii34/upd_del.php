<?php 
include('connect.php');


$id =$_GET['id'];

$del = "UPDATE `descript` SET `status` = '0' WHERE id = '$id'"; 
$res = mysqli_query($connect,$del);

if($res){
    header("location:http://localhost/products/trashdata.php");
}


?>