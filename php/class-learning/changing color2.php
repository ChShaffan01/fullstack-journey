<?php

$val = $_POST["value"];


if($val == 0)
{
    ?>
    <body style = 'background:<?php echo $val;?>'></body>
    <?php 
}
if ($val > 8888) {
    ?>
      <h1 style = 'color:red'>   <?php echo $val; ?> There is no color this number</h1>
      <?php 
}
else{
    ?>
    <body style = 'background: <?php echo "#".$val?>'></body>
    <?php
}

?>