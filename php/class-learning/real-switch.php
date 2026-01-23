<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

//simple switch

$var1 = "red";

switch ($var1) {
    case 'red':
       echo "<h1>thats is red </h1>";
        break; 
         case 'green':
       echo "<h1>thats is green </h1>";
        break; 
         case 'blue':
       echo "<h1>thats is blue </h1>";
        break; 
         case 'yellow':
       echo "<h1>thats is yellow </h1>";
        break; 
         case 'black':
       echo "<h1>thats is black </h1>";
        break;
    
    default:
        echo "<h1>soory your color not avalible</h1>";
        break;
}


// with some style

$var2 = "black";
switch ($var2) {
    case 'red':
       echo "<h1 style = 'background:red'>thats is red </h1>";
        break; 
         case 'green':
       echo "<h1 style = 'background:green'>thats is green </h1>";
        break; 
         case 'blue':
       echo "<h1 style = 'background:blue'>thats is blue </h1>";
        break; 
         case 'yellow':
       echo "<h1 style = 'background:yellow'>thats is yellow </h1>";
        break; 
         case 'black':
       echo "<h1 style = 'background:black'>thats is black </h1>";
        break;
    
    default:
        echo "<h1>soory your color not avalible</h1>";
        break;
}



?>
    
</body>
</html>