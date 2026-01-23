<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<title>Title</title>
</head>
<body>


    <div class="container-fluid">
    <div style="margin-top: 40px;">
    <h1 style="text-align: center; color: #6A33D3; margin: 0; padding: 0;">Simple Calculator</h1>
    <div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 6px 6px 10px 0px #6A33D3; max-width: 500px ; margin: auto;" >
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div class="form-group">
    <input class="form-control" type="number" placeholder="Enter First Value" name="first">
    </div>
    <div class="form-group">
    <input class="form-control" type="number" placeholder="Enter Second Value" name="second">
    </div>
    <div class="form-group">
    <input class="form-control" type="text" placeholder="Enter Operator" name="third">
    </div>

    <?php


$first_Value = $_POST['first'];
$second_Value = $_POST['second'];
$third_Value = $_POST['third'];
$answer;

if($third_Value == "-" || $third_Value == "+" || $third_Value == "*" || $third_Value == "/"  ){

    if($third_Value == "+"){
        $answer = $first_Value + $second_Value;
        
    }
   elseif($third_Value == "-"){
        $answer = $first_Value - $second_Value;
        
    }
    elseif($third_Value == "*"){
        $answer = $first_Value * $second_Value;
        
    }
    elseif($third_Value == "/"){
        $answer = $first_Value / $second_Value;
      
    } ?>

    <div class="div00" style="text-align: center; margin-top: 20px; font-size: 24px; color: #333; background: #f9f9f9; padding: 15px; border-radius: 8px; box-shadow: 4px 4px 8px 0px #ccc;">
    <?php 
    
    echo "The answer is : " .  $answer;
}
else{
    echo "Please enter a valid operator";
}

?>
 </div><br>
    <div class="form-group">
    <button class="btn btn-success btn-lg" type="submit" name="submit">Calculate</button>
    </div>
    </form>
    </div>
    </div>
    </div>



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></scr>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>


