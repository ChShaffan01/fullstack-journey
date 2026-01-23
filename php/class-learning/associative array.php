<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php


$var = array("car"=>"civic","model"=>2023,"color"=>"black");

//echo $var['car']; ayse array me changes bhi kr skte he 

//echo $var['car']; ayse sirf value print ho gi single

// sab se phele foreach me array varname save krna hota he phr uske bad name ke liye alag var name dena hota he or value ke liye alag jyse ke car model or color ko ek var name or uski value ko jyse civic 2023 black uski value ko alag;
foreach ($var as $name => $value) {
   echo "$name : $value <br>";
   //echo "$name <br>"; sirf name print kare ga 
}






?>
    
</body>
</html>