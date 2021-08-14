<?php
$mrk=110;
if($mrk<=100){
switch($mrk){
    case ($mrk>=90):
        echo"your grade is A+";
        break;
    case ($mrk>=80):
        echo"your grade is A";
        break;
    case ($mrk>=70):
        echo"your grade is B+";
        break;
    case ($mrk>=60):
        echo"your grade is B";
        break;
    case ($mrk>=50):
        echo"your grade is C+";
        break;
    case ($mrk>=40):
        echo"your grade is C";
        break;
    default:
        echo"your failed";
    
}
}else{
    echo"enter correct mark";
}
?>