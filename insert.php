<?php
include_once'database.php';
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $sql="INSERT INTO users(name,email)
    VALUES('$name','$email')";
    if(mysqli_query($conn,$sql)){
        echo"new record added";
    }else{
         echo"error".mysqli_error($conn);
    }
}
?>