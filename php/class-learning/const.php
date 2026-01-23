<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // php me constant var define ki madad se banate he define ke ()pera me phele name phr value deni hoti he
    define("ch","shaffan");
    //define("ch","h"); dubara value nahi de skte eror show kare ga
    echo ch."<br>";
    
    //php const ture false 

    // defult me false hota he false me ke cinst name agr chote lafzo me likha he to echo me chote lafz dene hote agr upper case diye to error show kare ga
    define("con","mera name shaffan he");
    echo con."<br>";
  //  echo CON;//error

  // true agr value match krti he const name ke sath to bs print ho jati he chahe upper case ho ya lower case

  define("con2","mera name shaffan he",true);
    echo COn2;
    ?>
</body>
</html>