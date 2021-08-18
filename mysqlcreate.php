<?php
$servername="localhost";
$username="root";
$password="";
$conn = mysqli_connect($servername,$username,$password);
if(!$conn)
{
    die("connection failed".mysqli_connect_error());
}
    $sql="CREATE DATABASE myDB";
    if(mysqli_query($conn,$sql)){
        echo "Database created successfully";
    }else{
        echo "Error ".mysqli_error($conn);
    }
?>