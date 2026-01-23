<?php

 $cookiename = "username";

 $cookievalue = "ch shaffan";

 // php me mili second nahi he sirf second
 $exp = time() + 10;

// agr delete krna he  to minus krni he
// $exp = time() - 10;

  setcookie($cookiename,$cookievalue,$exp);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 
// only name is requid baqi optional he

   // setcookie(name, value, expire, path, domain, secure, httponly);

  

    echo "<pre>";
    print_r($_COOKIE);
    echo "</pre>";

    if(!isset($_COOKIE[$cookiename])) {
        echo "Cookie named '" . $cookiename . "' is not set!";
      } else {
        echo "Cookie '" . $cookiename . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookiename];
      }
      
      echo "<br>"."<br>";

    if(count($_COOKIE) > 0){
        echo "cookie is set";
    }else{
        echo "cookie is unset";
    }
    
    ?>
</body>
</html>