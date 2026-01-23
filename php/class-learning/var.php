<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    
    $hel=" how are you";
    echo "and ".$hel."<br>";
 
//global function method
    $x1 = 20;
    $x2 = 23;
    function fun(){
        global $x1,$x2;
       $x2 = $x1 + $x2;
    }
    fun();
    echo $x2;
echo "<br>";
    $zy = "hello how are you";
   var_dump($zy);
    ?>
</body>
</html>