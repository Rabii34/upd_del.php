<?php
include('connect.php');
$fetch_data="SELECT * FROM `descript` where status='1'";
$fetch_query=mysqli_query($connect,$fetch_data);
if($fetch_query){
    if(mysqli_num_rows($fetch_query)>0){
       

        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
<table class="table">
  <thead class="table.dark">
    <tr>
      <th scope="col">NAME</th>
      <th scope="col">CATEGORY</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">IMAGE</th>
      <th>UPDATE</th>
      <th>DELETE</th>
    </tr>
  </thead>
  <tbody>
    <?php
     while($row=mysqli_fetch_assoc($fetch_query)){
    ?>
    <tr>
      <th scope="row"><?php echo $row['name'];?></th>
      <td><?php echo $row['category'];?></td>
      <td><?php echo $row['description'];?></td>
      <td> <img src="<?php echo 'uploadimg/' . $row['image']?>" alt="" height="50px" width="50px"> </td>
      <td><a class="btn btn-warning" href="update.php?id=<?php echo $row['id']?>">update</a></td>
      <td><a class="btn btn-danger" href="trash.php?id=<?php echo $row['id']?>">trash</a></td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>
</div>
<?php

}
}
?>
</body>
</html>