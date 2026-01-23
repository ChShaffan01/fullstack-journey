<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //find lenght
   echo strlen("shaffan")."<br>";//output 7 q ke ye lenght he ye 1 se shuru hoti he 0 se nahi
    
   // word count
    echo str_word_count("ch shaffan")."<br>";// OUTPUT 2


    // reverse
    echo strrev("ch shaffan")."<br>";// output naffahs hc

    // possition
    echo strpos("ch shaffan","shaffan")."<br>";// output 3 ye possition 0 se shuru hoti he is liye 


// replace
echo str_replace("hello","shaffan","hy hello");// output hy shaffan sab se phele value deni hoti he phr uske bad replace value alag string me phr us string me sab se phele wo value jo add krna chahte ho phr second wo jo replace krna chahte ho

    ?>
</body>
</html>