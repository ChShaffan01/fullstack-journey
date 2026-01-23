<?php 
 
 // simple array
$arr = ['apple', 'banana', 'cherry'];
foreach($arr as $fruit){
    echo $fruit . "<br>";
};

// associative array
$asoc_arr = [
    "name" => "shaffan",
    "class" => "web dev",
    "age" => 18,
    "Phone" => "03086367941"
];
foreach($asoc_arr as $key => $value){
    echo $key . " : " . $value . "<br>";
};


echo "<br> <br>";
// multidimensional array
$multi_arr = [
    [
    "name" => "shaffan",
    "class" => "web dev",
    "age" => 18,
    "Phone" => "03086367941"
    ],[
    "name" => "ahmad",
    "class" => "web dev",
    "age" => 22,
    "Phone" => "03*******"
    ],[
    "name" => "umar",
    "class" => "web dev",
    "age" => 20,
    "Phone" => "03******"
]
    ];

    
// foreach($multi_arr as $key => $value){
//     echo "User " . ($key + 1) . "<br>";
//     foreach($value as $k => $v){
//     echo $k . " : " . $v . "<br>";
//     }
//     echo "<br>";
//     }

// count array length
 echo count($multi_arr);

 // adding new array to multidimensional array
 array_push($multi_arr, [
    "name" => "ali",
    "class" => "web dev",
    "age" => 25,
    "Phone" => "03******"
 ]);

 // for acessing specific value
sort($multi_arr);

// for descending order
// rsort($multi_arr);


unset($multi_arr[0]['age']);

// removing last value
// ARRAY_POP($multi_arr);

 echo "<br> <br>";

foreach($multi_arr as $key => $value){
    echo "User " . ($key + 1) . "<br>";
    foreach($value as $k => $v){
    echo $k . " : " . $v . "<br>";
    }
    echo "<br>";
    }

?>