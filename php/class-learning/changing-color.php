

<?php

$val = $_POST["value"];


if($val == 0)
{
    ?>
    <body style = 'background:<?php echo $val;?>'>   <?php echo $val; ?>  Your color in background</body>
    <?php 
}
else{
    ?>
    <body style = 'background: <?php echo "#".$val?>'><?php echo $val; ?>  Your color in background</body>
    <?php
}

?>



</body>
</html>