<?php
class car{
    public $color;
    public $model;
    public function __construct($color, $model){
        $this->color=$color;
        $this->model=$model;
    }
    public function message(){
        return "my car is $this->color and model is $this->model";
    }
}
    $mycar=new car("black", "bmw");
    echo $mycar -> message();
    echo strpos("hello hi","hi");
    echo str_replace("da","di","daddd");
    $x=3.3;
    echo var_dump(is_int($x));
    $newx=(int)$x;
    echo $newx;
  

?>