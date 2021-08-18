<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("connection error".mysqli_connect_error());
}
$sql="INSERT INTO mytable(firstname,lastname,email)
VALUES('aaa','bbbb','aa@gmai.com');";
$sql.="INSERT INTO mytable(firstname,lastname,email)
VALUES('fsdf','fsf',fs@gmail.com');";
$sql.="INSERT INTO mytable(fistname,lastname,email)
VALUES('DFDF','fdff','fdfd@gmail.com')";



if(mysqli_multi_query($conn,$sql)){
    echo"multi vaules inserted successfully<br>";
}else{
    echo"error".$sql."<br>".$mysqli_error($conn);
}

?>