<?php
include('connect.php');

$user_id = $_GET['id'];

$restore = "UPDATE `descript` SET status = '1' where id = '$user_id' ";
$sqlconn = mysqli_query($connect, $restore);
if($sqlconn){
    header('location:http://localhost/products/production.php');
}
?>


?>