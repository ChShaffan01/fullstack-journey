<?php
 
 // first method
$stu =["ch shaffan","sudais","azlan","umar","ahamd","mohemen"];
var_dump($stu);
echo "<br><br>";

//second method
$stu= array("ch shaffan","sudais","azlan","umar","ahamd","mohemen");
var_dump($stu);
echo "<br><br>";

// thrid method
$var = array(
"car"=>"civic",
"model"=>2023,
"color"=>"black"
);
var_dump($var);
echo "<br><br>";


// 4th method phele khali array banaya phr bad me usme value include ki
$stu=[];
$stu[0]="apple";
$stu[0]="banana";
$stu[0]="mango";
var_dump($stu);
echo "<br><br>";

// 5th associative array phele khali array banaya phr bad me usme value include ki
$var  = [];
$var ["name"] = "civic";
$var ["model"] = 2023;
$var ["color"] = "black";
var_dump($var);
?>