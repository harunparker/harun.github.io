<?php
 include '_nav.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'conn.php';

  
    $id=$_GET['id'];



    $sql="SELECT * FROM `notes` WHERE `id` = $id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    





    $note=$_POST['note'];
    $description=$_POST['description'];
    $sql="UPDATE `notes` SET note='$note', description='$description' WHERE id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }
   
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>
<body>
<div class="container my-3">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Note</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="note"value="">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
  <label for="floatingTextarea">Description</label>
</div>
  <button type="submit" class="btn btn-dark my-3">Update Your Note</button>
</form>
    </div>
</body>
</html>