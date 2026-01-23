<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//   $email = "khansheriyar487@gmail.45678com"; in vailed
//   $url = "http://localhost/php_code/filters.php"; vaild

// ye check krta he email ka sytex sahi he to he filter var me do pera dena hota he ek var jo chech krta he or dusra filter validate or type email chars ya URL ya int inme se ek
//   if(filter_var($email,FILTER_VALIDATE_EMAIL)){ 
    //     echo "valid email";
    // }else{
        
    //     echo "invalid email";
    // } 
    // if(filter_var($url,FILTER_VALIDATE_URL)){
        //     echo "valid URL";
        // }else{
            
        //     echo "invalid URL";
        // }
        

        // ab var ka syntext ghalat he to iske dirty word trim kr ke synatze krna or koi jawascript or mql injection se bhi save rakhta he type string kt ke 
      
        //   $email = "khansheriyar487@gmail.45678com";  // valid email 
        //   if(filter_var($email,FILTER_SANITIZE_EMAIL)){ 
        //         echo "valid email";
        //     }else{
                
        //         echo "invalid email";
        //      } 
      //  $string = "<script>alert('you are hacked');</script>"; agr isko echo kiya to 
      // echo filter_var($string,FILTER_SANITIZE_STRING); // now save over inputs


      // ye html ke sare tags disabled kr deta he like htmlspecialchars jo the hamre pas liqin yaha pe strip_tags() ke name ka bluid function use kiya hamne

         $dirty_name = "<h1>ch shaffan</h1>";

         $sanitize_name = strip_tags($dirty_name);

         echo "simple var echo with h1" . $dirty_name;

         echo "sanitize var echo with this h1 " .$sanitize_name ;
         


?>


</body>
</html>