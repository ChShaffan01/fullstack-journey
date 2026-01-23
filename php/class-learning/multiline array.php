<?php

// is array me jitni chaiye utni value save ho gi like ["shaffan",10,19,19];
$var = array(
["shaffan",10],
["sudais",18],
["ahmad",10],
["azlan",15],
);

// ye index pr kam krta he pheli value 0 se shuru hoti he  isme phele colom ki value deni hoti he kon sa number colom or phr kon c number value 

echo $var[0][0]."<br>";// shaffan
echo $var[0][1]."<br>";//10
echo $var[3][0]."<br>";// azlan
echo $var[1][1]."<br>";// 18
echo $var[2][0]."<br>";// ahmad



?>