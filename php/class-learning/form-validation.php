<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="bootstrap.css">
</head>
<body>
    
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >

<div class="container-fluid">
<div style="margin-top: 40px;">
<h1 style="text-align: center; color: #6A33D3; margin: 0; padding: 0;">Login</h1>
<div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 6px 6px 10px 0px #6A33D3; max-width: 500px ; margin: auto;" >
<form action="#" method="POST">
<div class="form-group">
<input class="form-control" type="email" placeholder="E-mail" name="email">
</div>
<div class="form-group">
<input class="form-control" type="password" placeholder="Password" name="pwd">
</div>
<div class="form-group">
<button class="btn btn-success btn-lg" type="submit" name="submit">Login</button>
</div>
</form>
</div>
</div>
</div>
</form>

</body>
</html>




<?php
echo "<br>";






if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   $pwd = $_POST["pwd"];// hacked issue
  $pwd = test_input($_POST["pwd"]);// secure
  $email = text_input($_POST["email"]);//secure
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "email = $email or password = $pwd";



?>