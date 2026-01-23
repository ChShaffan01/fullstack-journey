<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php


//spaceship opreter like a boolean
// ye sopaceship he jo integer me value deti agr value barabr he to return = 0 agr value less he phr valur = 1 agr value grater ho to return = -1

$x= 10;
$y= 20;
$z= 20;
echo $x<=>$y;// return = -1
echo $y<=>$x;// return = 1
echo $y<=>$z;// return = 0

//post increament ye phele 20 print kare ga phr age jai ga or isi tarha $x2++;
echo "<br>";
$x2 = 20;
echo $x2++;// 20
echo $x2++;// 21

echo "<br>";
// pre increment or ye sidha age jai ga or iski hi tarha decreament bhi krte he --$y2 ;
$y2=10;
echo ++$y2;// 11
echo ++$y2;// 12
echo ++$y2;// 13








?>



</body>
</html>