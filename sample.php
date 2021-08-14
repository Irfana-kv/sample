<?php
$a="hello";
$b=" world<br>";
echo $a.$b;
$a.=$b;
echo $a;
$a1= array("1"=>"aaa","3");
$a2= array("2"=>"bbbb");
print_r($a1+$a2);
echo $x=(empty($y))?"its empty<br>":"its not empty";
$y=11;
echo $x=(empty($y))?"its empty":"$y";
$p=10;
$q=3;
if($p<$q){
    echo"its true";
}elseif($p>$q){
    echo"yeah its true<br>";
}else{
    echo"its false";
}
$col="red";
switch($col){
    case "red":
        echo"its red";
        break;
    case "green":
        echo"its green";
        break;
    case "blue":
        echo"its blue";
        break;
    default:
        echo"its default";
    }
$r=3;
while($r<5){
    echo"the number is$r<br>";
    $r++;
}
?>