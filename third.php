

<?php

echo "Hello World!<br>";
echo "Hello World!<br>";
echo "Hello World!<br>";
$color= "red";
echo"my car is $color<br>";
$x=10;
$y=20;

echo $x+$y;
function func(){
    $fun=22;
    echo"<br>local function $fun<br>";
}
func();
$g1=13;
$g2=14;
function globfun(){
    global $g1,$g2;
    $g2=$g1+$g2;
    
}
globfun();
echo $g2;
$arr= array('ass','sa','sas');
var_dump($arr)
?> 

