<?php
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
  die("connection failed".mysqli_connect);
}
$sql="CREATE TABLE myTable(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  if(mysqli_query($conn,$sql)){
    echo"table created succesfully";
  }else{
    echo"error in table creation".mysqli_error($conn);
  }
  ?>