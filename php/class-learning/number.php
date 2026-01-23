<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //number type NaN number Float Int infinity
     $x1 = 1234;
     $x2 = 1.2332;
     $x3 = "123";

     // var_dump ye php me datatype check krta he
     var_dump($x1);//int
     var_dump($x2);// float
     var_dump($x3);// string

echo "<br>";

     // check int ye boolean me true false me answer de ga 
     var_dump(is_int($x1));// true 
     var_dump(is_int($x2));// false

     echo "<br>";

     // check float
     var_dump(is_float($x2));// true 
     var_dump(is_float($x1));// false

     echo "<br>";

     //numaric
   
     var_dump(is_numeric($x1));//true 
     var_dump(is_numeric($x3));// ture q ke string agr type he bhi save to numaric number he
     var_dump(is_numeric($x2));


    ?>
</body>
</html>