
<?php

# thats all current time method 

# ye formate work kerte he simple date likhne ke liye bilkul easy he

echo "Today is " . date("Y/m/d") . "<br>";//first method in number these all
echo "Today is " . date("Y.m.d") . "<br>";// second method
echo "Today is " . date("Y-m-d") . "<br>";// third method

echo "Today is " . date("Y") . "<br>";// only year print thats like more print

echo "The time is " . date("H:i:sa"). "<br>";// H=hour 0_24 h=1_12  i=minutes s=second a=am p=pm

echo "Today is " . date("l") . "<br>". "<br>";// only day print in english


# we create  time
# Syntax
# mktime(hour, minute, second, month, day, year)
// sab se phele ham mktime name ke function me time set krte he syntax ke mutabik phr date function me ham likhte he ke hame apne set kiye hoi time se kiya kiya chaiye phr uske bad ,ke sath apna set kiye hoi time ka var likhte he 
$time = mktime(23,7,34,1,5,2025);
echo date("d H:i:s",$time). "<br>". "<br>";


# string me ate likh ke number me convert krna
// iske liye strtotime() function use krna hota he phr value likhni hoti he or baqi mktime() wala method hi 
$d=strtotime("10:30pm january 5 2025");
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>". "<br>";


// advance time set 
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>