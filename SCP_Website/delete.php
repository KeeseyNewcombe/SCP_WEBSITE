<?php 
    include 'db.php';
    $id=$_GET['id'];
    
    $sql="DELETE FROM users WHERE id='$id'";
    if(mysqli_query($connection,$sql)){
        header("location:index.php");
    }
    else{
        echo"Something went wrong!";
    }

?>