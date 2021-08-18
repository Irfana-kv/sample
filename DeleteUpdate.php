<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql="DELETE FROM mytable where firstname='aaa'";
$sqlnew="UPDATE mytable SET lastname='thomas' where id=16";
if(mysqli_query($conn,$sql)){
    echo"record deleted succesfuly";

}else{
    echo"error".mysqli_error($conn);
}
if(mysqli_query($conn,$sqlnew)){
    echo"record updated";
}else{
    echo"error".mysqli_error($conn);
}
?>