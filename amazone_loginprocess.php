<?php
session_start();
if(isset($_POST['submit'])){
    extract($_POST);
    include database.php;
    $sql=mysqli_query($conn,"SELECT * FROM register where Email='$email' and Password='($pass)'");
    $row=mysql_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["first name"]=$row['firstname'];
        $_SESSION["last name"]=$row['lastname'];
        $_SESSION["mobie number"]=$row['mobilenumber'];
        $_SESSION["email"]=$row['email'];
        $_SESSION["passwora"]=$row['password'];
        header("Location:welcome.php")
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>