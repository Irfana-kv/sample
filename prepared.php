<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn){
  die("connection error".mysqli_connect_error);
}
$stmt=$conn->prepare("INSERT INTO mytable(fistname,lastname,email)VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);
$firstname="fdfd";
$lastname="fdf";
$email="fdfd@gmial.com";
$stmt->execute();
$firstname="fdffr";
$lastname="fery";
$email="ere@yahoo.com";
$stmt->execute();
echo "prepare method used successfully";
$stmt->close();
?>

