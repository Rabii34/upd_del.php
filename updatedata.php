<?php
include('connect.php');
if(isset($_POST['update'])){
    $pid=$_POST['id'];
    $pname=$_POST['name'];
    $pcat=$_POST['cat'];
    $pdes=$_POST['des'];
    $pimg=$_POST['img'];
    $update="UPDATE `descript` SET name='$pname', category='$pcat', description='$pdes', image='$pimg'
    where id='$pid'";
    $upd_que=mysqli_query($connect,$update);
    if(!$upd_que){
        echo "query failed";
    }
   
  header('location:http://localhost/products/production.php');
    
    
}
?>