<?php



if(isset($_GET['id'])){
    include 'conn.php';
    $id=$_GET['id'];
   
    $sql="DELETE FROM `notes` WHERE `notes`.`id` = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header('location:index.php');
    }else {
        echo "not delete";
    }
}

?>