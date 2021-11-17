<?php




if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'conn.php';
    $note=$_POST['note'];
    $description=$_POST['description'];
    $sql="INSERT INTO `notes` ( `note`, `description`) VALUES ( '$note', '$description')";
    $result=mysqli_query($conn,$sql);
   
}




?>