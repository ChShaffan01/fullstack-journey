<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- all types -->

<!-- fopen(filename, mode)

MODES:  
r  = Read-Only  
w = Write (Erases existing content or Create new file)  
a = append (Write data at the end)  
x = Create a new file (if exists return false)  
r+ = Read & Write  
w+ = Read & Write (Erases Existing Content)   -->





   <?php
   
//  sab se phele yaha file connect kari jisme phele fopen ke function me 2 pera pass krne hote he file name jisme data jai ga or dusra mode  or phr last fclose bhi krna he 


//    $file_connect = fopen("file.txt","r+");
//    $file_connect = fopen("file.txt","a");
   $file_connect = fopen("file2.txt","w");

//  ye first method he read krne ka isme hamne lenght define nahi ki balke full file show karo jo bhi he file me 
 // echo  $content = fread($file_connect,filesize("file.txt"));

 // short hand check full file lenght is ke liye fopen  or fclose zaruri nahi
//  echo filesize("file.txt");

 // only 18 lenght text show
//  echo  $content = fread($file_connect,18);

 // file end of file hamne kaha he ke uper se shuru kr agr !not hata de to ye niche chala jai ga or false dega q ke data nahi ho ga or fgets funtion use kiya jis ki madad se ye fata line by line laya

// while(!feof($file_connect)){
//     echo fgets ($file_connect) . "<br>";
// }

// direct is ke liye fopen  or fclose zaruri nahi
// echo $txtfile = file_get_contents("file.txt");

// ye purani value delete kr ke nwe add krta he agr mode w hofwrite me ek pera name file or mode or dusre me value  agr mode a kiya to puranivalue ke sath concat kr dega

// fwrite($file_connect,"old value + new value");
//  echo $txtfile = file_get_contents("file.txt");

// direct method use liqin isme mode nahi he to ye write ka kam kare ga
// file_put_contents("file.txt","direct method use");
//  echo $txtfile = file_get_contents("file.txt");


// ye file name check krta he ke is name file he ya nahi agr fi.txt data ya kuch or to else
// if (file_exists("file.txt")) {
//    echo "file exist";
// }else{
//     echo "file not found";

// }

// ye file del krta he hame phele check kiya ye file he phr iske bad unlink kiya file ke ye wali file del krde
// if (file_exists("file2.txt")) {
//     unlink("file2.txt");
//    echo "file deleted";
// }else{
//     echo "file not found";

// }

// isme mode w krke ye data dena hota he agr is name ki file nahi hoi to ye create kr deta he 
 fwrite($file_connect,"new file created");
  echo $txtfile = file_get_contents("file2.txt");


  fclose($file_connect);
   ?>



</body>
</html>