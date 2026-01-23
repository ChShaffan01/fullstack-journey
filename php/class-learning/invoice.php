
<?php

$name =$_POST['customername'];
$address =$_POST['address'];
$email =$_POST['email'];
$phone =$_POST['phone'];
$item =$_POST['item'];
$quantity =$_POST['quantity'];
$unit_price =$_POST['unit-price'];
$amount =$_POST['amount'];

$item2 =$_POST['item2'];
$quantity2 =$_POST['quantity2'];
$unit_price2 =$_POST['unit-price2'];
$amount2 =$_POST['amount2'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title><link rel="stylesheet" href="bootstrap.css">
    <style>
      .sec-1{
            margin-left: 150px;
            
            margin-top: 100px;
            width: 60%;
            text-transform: capitalize;
            font-size: 1.1em;
         
        }
        h1{
        color: rgb(207, 36, 36);
        text-transform: capitalize;
        }
        .sec-2,form h1{
            margin-left: 100px;
            /* width: 60%; */
            text-transform: capitalize;
        }
       .else-p{
        color: rgb(207, 36, 36);
        font-weight: bold;
    
       }
       .s2d1{
        font-size: 1em;
        text-transform: capitalize;
        font-style: italic;
        text-align: center;
        color: rgb(56, 94, 94);
        
       
       }
       .btn{
            width: 100px;
            margin: 5px;
            font-weight: bold;
        }
     .s2-2d1 {
           margin-left: 100px;
        font-style: italic;
        font-size: 1.2em;
        color: rgb(53, 90, 107);
            text-align: center;


        
    }
    .d2{
            width: 800px;
            font-weight: bold;
        }
       
       
    </style>
</head>
<body>

  
</head>
<body>
    <section class="sec-1 d-flex justify-content-around">
<div class="s1d1"><h1> Sale invoice</h1> <br>
<strong>Company name :</strong> digiboost <br>
<strong>Adress :</strong> Main G.T Road Hakimabad Nowshera<br>
<strong>Phone :</strong> 03320979756 <br>
<strong>Email :</strong> digiboost@gmail.com
</div>
<div class="s1d2"><img src="img/logo.jpeg" alt="there is some error"></div>
    </section>
    <br>
    <br>




    <section class="sec-2 d-flex justify-content-around">
<div class="s2d1">
<strong>Receiver_Name</strong><br>
<?php if (strlen($name) > 0) {
   echo $name;
}else {
  echo "<p class='else-p'>error Receiver_Name has empty  </p>";
} ?>
</div>
<div class="s2d1">
<strong>Address</strong><br>
<?php if (strlen($address) > 0) {
   echo $address;
}else {
  echo "<p class='else-p'>error Address has empty </p>";
} ?>
</div>
<div class="s2d1">
<strong>Email</strong><br>
<?php if (strlen($email) > 0) {
   echo $email;
}else {
  echo "<p class='else-p'>error Email has empty </p>";
} ?>
</div>
<div class="s2d1">
<strong>Contact_Number</strong><br>
<?php if (strlen($phone) > 0) {
   echo $phone;
}else {
  echo "<p class='else-p'>error Contact_Number has empty  </p>";
} ?>
</div>





</section>

<br>
    <br>
    <section class="sec-2 d-flex justify-content-around">
<div class="s2d1">
<strong>Purchase_Item</strong><br>
<?php if (strlen($item) > 0) {
   echo $item;
}else {
  echo "<p class='else-p'>error Purchase_Item has empty </p>";
} ?>
</div>
<div class="s2d1">
<strong>Quantity</strong><br>
<?php if (strlen($quantity) > 0) {
   echo $quantity;
}else {
  echo "<p class='else-p'>error Quantity has empty  </p>";
} ?>
</div>
<div class="s2d1">
<strong>Unit_Price</strong><br>
<?php if (strlen($unit_price) > 0) {
   echo $unit_price." PKR";
}else {
  echo "<p class='else-p'>error Unit_Price has empty  </p>";
} ?>
</div>
<div class="s2d1">
<strong>Amount</strong><br>
<?php if (strlen($amount) > 0) {
   echo $amount." PKR";
}else {
  echo "<p class='else-p'>error Amount has empty  </p>";
} ?>
</div>
</section>






<br><br>
<section class="sec-2 d-flex justify-content-around">
<?php

if (strlen($item2) > 0) {
  ?>
<div class="s2d1">
<strong>Purchase_Item</strong><br>
<?php if (strlen($item2) > 0) {
   echo $item2;
}else {
  echo "<p class='else-p'>error Purchase_Item has empty </p>";
} ?>
</div>
<div class="s2d1">
<strong>Quantity</strong><br>
<?php if (strlen($quantity2) > 0) {
   echo $quantity2;
}else {
  echo "<p class='else-p'>error Quantity has empty  </p>";
} ?>
</div>
<div class="s2d1">
<strong>Unit_Price</strong><br>
<?php if (strlen($unit_price2) > 0) {
   echo $unit_price2." PKR";
}else {
  echo "<p class='else-p'>error Unit_Price has empty </p>";
} ?>
</div>
<div class="s2d1">
<strong>Amount</strong><br>
<?php if (strlen($amount2) > 0) {
   echo $amount2." PKR";
}else {
  echo "<p class='error Amount has empty </p>";
} ?>
</div>




  <?php
}
else{
   
}
?>

</section>
<br>

<section class ="sec-2-2 ">
    

<div class="s2-2d1">
<strong>Total_Amount</strong><br>
<?php
if ($amount2 == 0) {
   echo  $amount." PKR";
}
else{
   echo  $amount + $amount2." PKR";
}

?>
</div>

</section>

 <section class="sec-3 d-flex justify-content-center mt-5 " >
<form action="invoice.html">  <button type="submit" class="btn btn-outline-primary">Go back</button></form>
 <button type="reset" class="btn btn-outline-primary " onclick="fun()">Print</button>
 </section>







<script>

    function fun(){
        print()
    }
</script>




</body>
</html>