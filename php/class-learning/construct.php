<?php

class students{

public $name;
public $age;

public function __construct($name , $age){
 $this->name = $name;
 $this->age = $age;
echo "Student name is ".$this->name . "<br> and age is " . $this->age;


}

// public function get(){
//     echo "Student name is ".$this->name . "<br> and age is " . $this->age;
// }

}

$s1 = new students("shaffan",17);
// $s1->get();


?>