<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection error".mysqli_connect_error());
}
$sql="SELECT id,firstname,lastname FROM mytable WHERE lastname='bbbb'";
$result= mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo "id".$row["id"]."-name ".$row["firstname"].$row["lastname"]."<br>";

    }
}else{
    echo"0 rows";
}
?>