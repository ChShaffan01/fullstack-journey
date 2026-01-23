<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        form{
            text-align: center;
            background-color: #1000;
        }
        input{
            margin-top: 50px;
            padding: 5px;
            width: 300px;
            border-radius: 10px;
            border: 2px solid rgb(0, 153, 255);
            outline: none;
            padding-left: 10px;
            color: deepskyblue;
            font-size: 1.2em;
        }
        button{
            padding: 5px;
            font-weight: bold;
            font-size: 1.4em;
            color: #fff;
            background-color: #55bb77;
        }
        h1{
            text-align: center;
            margin-top: 200px;
            color: orangered;
            font-weight: bold;
            font-size: 3.1em;
        }
    </style>
</head>

<body>

    <h1>Changing color type here fav color</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <input type="text" name="value" placeholder="plz type color name "> <br><br>
        <button>submit</button>

    </form>


</body>

</html>
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