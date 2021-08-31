<?php
include_once'database.php';

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $mobilenumber=$_POST['mobilenumber'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dateofbirth=$_POST['dateofbirth'];
    $address=$_POST['address'];
    $hash=password_hash($password,PASSWORD_BCRYPT);
    
    $sql="INSERT INTO users(firstname,lastname,mobilenumber,email,password,dateofbirth,address)
    VALUES('$firstname','$lastname','$mobilenumber','$email','$hash','$dateofbirth','$address')";
    if(mysqli_query($conn,$sql)){
        echo "<div class='form'>
        <h3>Account created successfully<br>
        click here<a href='amazone_login.php'>Login</a>
        </div>";
        // header("Location: amazone_create.php");
        
    }else{
         echo"error".mysqli_error($conn);
    }

}
?>