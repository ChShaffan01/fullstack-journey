<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>

<body>


<?php

$val = $_POST["value"];

$intVal = (int)$val;

if($val != 0)
{


    ?>
    <body style = 'background:<?php echo "#".$val;?>'> <?php echo $val; ?>  Your color in background</body>
    <?php 
}
else{
    ?>
    <h2>Error In You Color Name and Hex Number</h2>
    <?php
}

?>



</body>
</html>