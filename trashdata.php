<?php
include('connect.php'); 
$sql = "SELECT * from `descript` where status = '0'";
$fetch = mysqli_query($connect, $sql);
if($fetch){
    if(mysqli_num_rows($fetch)>0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title> Form Handling using Php </title>
</head>
<body>
    <table class="table table-bordered text-center">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Image</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while($data = mysqli_fetch_assoc($fetch)){
            ?>
            <tr>
                <td> <?php echo $data['id'];  ?> </td>
                <td> <?php echo $data['name'];  ?> </td>
                <td> <?php echo $data['category'];  ?> </td>
                <td> <?php echo $data['description'];  ?> </td>
                <td> <?php echo $data['image'];  ?> </td>
                <td><a href="delete.php?id=<?php echo $data['id'];  ?>" class="btn btn-warning">Delete</a></td>
                <td><a href="restore.php?id=<?php echo $data['id'];  ?>" class="btn btn-danger">Restore</a></td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <?php
    }
}
    ?>   
</body>
</html>