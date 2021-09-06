<?php
if(isset($_POST['submit'])){
    include_once'database.php';
    $name=$_POST['name'];
    $date=$_POST['date'];
    $user_id=$_POST['user_id'];
    $filename=$_FILES["uploadimage"]["name"];
    $tempname=$_FILES["uploadimage"]["tmp_name"];
    $filesize=$_FILES["uploadimage"]["size"];
    $fileerror=$_FILES["uploadimage"]["error"];


    // $tempname=$_FILES["uploadimage"]["tmp_name"];
      $filedestination="upload/".$filename;
      move_uploaded_file($tempname,$filedestination);
    $sql="INSERT INTO add_product(name,date,filename,user_id) VALUES('$name','$date','$filename','$user_id')";
    
    if(mysqli_query($conn,$sql)){
        header("location:new_home.php");
    }else{
        echo"error".mysqli_error($conn);
    }
}
?>