<?php
include('connect.php');
if(isset($_POST['submit'])){
    $pname=$_POST['name'];
    $pcat=$_POST['cat'];
    $pdes=$_POST['des'];
    $img_name=$_FILES['img']['name'];
    $img_tmpname=$_FILES['img']['tmp_name'];
    $size=$_FILES['img']['size'];
    $insert="INSERT INTO `descript` (`name`, `category`, `description`, `image`) VALUES ('$pname', '$pcat', '$pdes', '$img_name')";
    $result=mysqli_query($connect,$insert);
    move_uploaded_file($img_tmpname, 'uploadimg/'. $img_name);
    header('location: production.php');
    if(!$result){
        echo "error";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Add your products</h1>
<form action="<?php echo $_SERVER['PHP_SELF']?>" enctype="multipart/form-detail" method="post" >
<!-- <input type="hidden" name="id" class="form-control">
<br><br> -->
<label for="pname">Name</label>
<input type="text" name="name" class="form-control">
<br><br>
<label for="cat">Category</label>
<input type="text" name="cat" class="form-control">
<br><br>
<label for="des">Description</label>
<input type="text" name="des" class="form-control">
<br><br>
<label for="img">Image</label>
<input type="file" name="img" class="form-control">
<br><br>
<input type="submit" name="submit" class="btn btn-success">

</form>
</div>
</body>
</html>