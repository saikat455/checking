<?php
require 'config.php';
if(isset($_POST["register"])){
  $name = $_POST["name"];
  $username = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];

  $user = mysqli_query($conn, "SELECT * FROM tb_users WHERE username = '$username' OR email = '$email'");
  if(mysqli_num_rows($user) > 0){
    echo
    "
    <script> alert('Username/Email Has Already Taken'); </script>
    ";
  }
  else{
    $query = "INSERT INTO tb_users VALUES('', '$name', '$username', '$email', '$password', '$phone')";
    mysqli_query($conn, $query);
    echo
    "
    <script> alert('Registration Successful'); </script>
    ";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Register Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
  </head>


  <body>


  <div class="res">
    <div class="img">

    </div>

  </div>

  <!--------Form created from here---------->
  <div class="registrationForm">



    <form class="" action="" method="post">
      <div class="title">
        <h2>REGISTER FORM</h2>
      </div>
      <div class="half">
        <div class="item">
          <label for="">First Name:</label>
          <input type="text" name="name" required value="">
        </div>
        <div class="item">
          <label for="">Last Name</label>
          <input type="text" name="username" required value="">
        </div>
      </div>
      <div class="half">
        <div class="item">
          <label for="">Email</label>
          <input type="text" name="email" required value="">
        </div>
        <div class="item">
          <label for="">Password</label>
          <input type="password" name="password" required value="">
        </div>
      </div>
      <div class="full">
        <div class="item">
          <label for="">Phone</label>
          <input type="text" name="phone" required value="">
        </div>
      </div>
      <div class="action">
        <input type="submit" name = "register" value = "REGISTER">
      </div>
    </form>
    </div>

  
<div class="info-card">

<div class="info">
  <div class="in">
     <i class="fa-solid fa-phone-volume"></i>
  </div>

  <div class="num">
     <p><b>Phone:</b>01743980740</p>
     <p><b>Phone:</b> 01608133117</p>
  </div>
</div>

<div class="info">
  <div class="in">
     <i class="fa-solid fa-envelope"></i>
  </div>

  <div class="num1">
     <p><b>Email:</b></p>
     <p>mstshikhakhatun@gmail.com</p>
    
  </div>
</div>

<div class="info">
  <div class="in">
     <i class="fa-sharp fa-solid fa-address-book"></i>
  </div>

  <div class="num2">
     <p><b>Address:</b></p>
     <p>Baridhara J-Block Road-20, H#3, P#3</p>
     <p>IUB Saima Hall</p>
  </div>
</div>

  

    </div>
  </body>
</html>
