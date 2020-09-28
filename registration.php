 <?php include('form_handler.php'); ?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Niconne&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Niconne&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Leckerli One' rel='stylesheet'>
    <link rel="stylesheet" href="registration.css">
    <title>Registration</title>
</head>
<style>
.error{
    color: red;
    font-size: 12px;
    
}
</style>
<body>


<div class="container">
  <div class="form">
    <h2 class="main-text">Create an Account</h2>
    <form class="register-form" method="post" action="">
   First name<input type="text" placeholder="First name" name="fname" value="<?php echo $fname;  ?>">
      <div class="error"><?php echo  $errors['fname'] ; ?></div>

<br>
      Last name<input type="text" placeholder="Last name" name="lname" value="<?php echo $lname; ?>">
      <div class="error"><?php echo $errors['lname'] ;?></div>

<br>
      Email<input type="text" placeholder="Email" name="email" value="<?php echo $email;?>">
      <div class="error"><?php echo $errors['email'] ; ?></div>

<br>
      Address<input type="text" placeholder="Address" name="address" value="<?php echo $address;?>" >
      <div class="error"><?php echo $errors['address'] ; ?></div>
      

      <input type="submit" class="submit-btn" value="Register" name="register">

      <p class="message">Already registered? <a href="">Login</a></p>
    </form>
  </div>
</div>

</body>
</html>