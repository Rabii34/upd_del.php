<?php
include('connect.php');
$user_id=$_GET['id'];
$data="SELECT * FROM `descript` where id='$user_id'";
$res=mysqli_query($connect,$data);
if(!$res){
    die("query failed");
}
    if(mysqli_num_rows($res)>0){
        while($data=mysqli_fetch_assoc($res)){

        
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>update</title>
</head>
<body>
<div class="container">
        <h1>Add your products</h1>
<form action="updatedata.php"  method="post" >
<input type="hidden" name="id" id="" class="form-control" value="<?php echo $data['id'];?>">
<br><br>
<label for="pname">Name</label>
<input type="text" name="name" class="form-control" value="<?php echo $data['name'];?>">
<br><br>
<label for="cat">Category</label>
<input type="text" name="cat" class="form-control" value="<?php echo $data['category'];?>">
<br><br>
<label for="des">Description</label>
<input type="text" name="des" class="form-control" value="<?php echo $data['description'];?>">
<br><br>
<label for="img">Image</label>
<input type="file" name="img" class="form-control" >
<br><br>
<input type="submit" name="update" class="btn btn-success" value="update">

</form>
</div>
<?php
}
}

?>
</body>
</html>