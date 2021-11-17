<?php

include '_nav.php';
include 'insert.php';
include 'conn.php';


 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    
    <link rel="stylesheet" href="bootstrap.css">
    <script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
   <link rel="stylesheet" href="//cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
   <script src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
  
</head>
<body  >
  <div class="container-fluid" >
   <div class="my-2 mx-2"> <h1 >Welcome to iNotes</h1></div>
    <div class="container my-3">
    <form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Note</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="note"  >
    <div id="emailHelp" class="form-text" >You can write down your note here.</div>
  </div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" name="description"></textarea>
  <label for="floatingTextarea">Description</label>
</div>
  <button type="submit" class="btn btn-dark my-3"  style="box-shadow: 5px 5px 15px 5px #000000;">Add Your Note</button>
</form>
    </div>

    <div class="container my-3">
    <table class="table" id="myTable" >
  <thead>
    <tr class="text-center  ">
      <th scope="col">Sno</th>
      <th scope="col">Note</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      <?php
      $sql="SELECT * FROM `notes`";
      $result=mysqli_query($conn,$sql);
      $id=1;
      while($row=mysqli_fetch_assoc($result)){
      
      ?>
     <tr class="text-center">
      <th scope="row" ><?php echo $id++;?></th>
      <td ><?php echo $row['note'];?></td>
      <td><?php echo $row['description'];?></td>
      <td>
      <a href="update.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary"   style="box-shadow: 5px 5px 15px 5px #000000;">Update</button>
</a>  
      <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-dark"  >Remove</button>
</a>
    </td>
    </tr>
   <?php
      }
      ?>
  </tbody>
</table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      $(document).ready( function () {
    $('#myTable').DataTable();
} );
  </script>
  <footer  style="margin-top: 3rem;">
  © Copyright 2021 <a href="#"  style="text-decoration: none;">Shanu malik</a> All rights reserved</
   </footer>
  </div>
</body>

</html>