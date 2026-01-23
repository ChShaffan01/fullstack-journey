<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="bootstrap.css">
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>

<?php

$nameEm = $emailEm = $passwordEm = $webEm = $phoneEm = $genderEm = "";
$name = $web = $email = $password = $phone = $gender  = "";
if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if (empty($_POST['name'])) {
    $nameEm="Name is Required";
   }
   else {
    $name= cheack_input($_POST['name']);
    if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
        $nameEm = "Invalid NAME";
      }
   }  
    if (empty($_POST['email'])) {
    $emailEm="email is Required";
   }
   else {
    $email= cheack_input($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailEm = "Invalid email format";
      }
   } 
     if (empty($_POST['pwd'])) {
    $passwordEm="password is Required";
   }
   else {
    $password= cheack_input($_POST['pwd']);
   } 
     if (empty($_POST['web'])) {
    $webEm="";
   }
   else {
    $web= cheack_input($_POST['web']);
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web)) {
        $webEm = "Invalid URL";
      }
    
   }   
   if (empty($_POST['no'])) {
    $phoneEm="Phone NO is Required";
   }
   else {
    $phone= cheack_input($_POST['no']);
    if (!preg_match("/^[0-9+]{11}*$/",$phone)) {
        $phoneEm = "Invalid NUMBER";
      }
   } 
    if (empty($_POST['gender'])) {
    $genderEm="gender is Required";
   }
   else {
    $gender= cheack_input($_POST['gender']);
   }
}
function cheack_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
    <!-- -----------------------------------------------------------  -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <div class="container-fluid">
    <div style="margin-top: 40px;">
    <h1 style="text-align: center; color: #6A33D3; margin: 0; padding: 0;">SignUp</h1>
    <div style="background: #fff; padding: 30px; border-radius: 10px; box-shadow: 6px 6px 10px 0px #6A33D3; max-width: 500px ; margin: auto;" >
    <form action="#" method="POST">
    <div class="form-group">
    <input class="form-control" type="text" placeholder="Name" name="name">
    <span class="error">*<?php
       echo $nameEm; ?></span>
    </div>
    
    <div class="form-group">
        <input class="form-control" type="text" placeholder="E-mail" name="email"><span class="error">*<?php
       echo $emailEm; ?></span>
    </div>
    <div class="form-group">
        <input class="form-control" type="password" placeholder="Password" name="pwd">
        <span class="error">*<?php
       echo $passwordEm; ?></span>
    </div>
    <div class="form-group">
    <input class="form-control" type="text" placeholder="Website" name="web">
    <span class="error">*<?php
       echo $webEm; ?></span>
    </div>
    <div class="form-group">
    <input class="form-control" type="number" placeholder="Mobile Number" name="no">
    <span class="error">*<?php
       echo $phoneEm; ?></span>
    </div>
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Male</label>
    </div> 
    <div class="form-check form-check-inline">
    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="option1">
    <label class="form-check-label" for="inlineRadio1">Female</label>
    <span class="error">*<?php
       echo $genderEm; ?></span>
    </div>
    <div class="form-group mt-1 ml-2">
    <button class="btn btn-outline-primary btn-lg " type="Reset" name="submit">Reset</button>
    <button class="btn btn-outline-primary btn-lg ml-1" type="submit" name="submit">SignUp</button>
    </div>
    </form>
    </div>
    </div>
    </div></form>
</body>
</html>


