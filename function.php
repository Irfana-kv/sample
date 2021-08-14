<?php 
function write(){
    echo "hello world<br>";
}
write();
function names($name){
    echo"$name hii<br>";
}
names("iff");
names("fdjfk");

function add($a,$b){
     $c = $a + $b;
     return $c;
}
echo "add=".add(23,12);
echo "add=".add(432,23);
?>