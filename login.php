<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $usernameemail = $_POST["usernameemail"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE number = '$usernameemail' OR email = '$usernameemail'");
  $row = mysqli_fetch_assoc($result);
  if(mysqli_num_rows($result) > 0){
    if($password == $row['password']){
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
      header("Location: index.php");
    }
    else{
      echo
      "<script> alert('Wrong Password'); </script>";
    }
  }
  else{
    echo
    "<script> alert('User Not Registered'); </script>";
  }
}
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Flipkart</title>
    <link rel="stylesheet" href="styels.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
  <div class="box">
    <section>
     <div class="left-panel">
      <img src="flipkart.jpeg" width="500px" alt="">
     </div>
     <div class="right-panel">
      <div class="logpnl">
        <h2>Login</h2>
        <h5>Get access to your Oders,Wishlist and Recommendations</h5>
        <div class="detail">
        
        
        
        
          <form action="" method ="post" autocomplete="off">
          <div class="emailBx">
            <label for="usernameemail">Enter Email/Mobile number</label>
            <div class="input-icons">
              <i class="fa fa-envelope icon">
              </i>
              <input class="input-field" type="text" id="usernameemail" name="usernameemail" required>
            </div>
          </div>
           
            <span class="pwdBx">
             
              <label for="password">Enter passwords</label>
                    <div class="input-icons">
                       <i class="fa fa-key icon">
                       </i>
                        <input class="input-field" type="password" id="password" name="password" required>
                   </div>
                     <a class="forgot" href="forget password.html"> Forgot password?</a>
            </span>
          <div class="inputBx">
            <button type="submit" name="submit">Login</button>
            
            <button onclick="document.location='signup.php'">Sign Up</button>
            
          </div>
        </form>
        





      </div>
      <div class="footer">
      <h5>We no longer support login via Social accounts.To recover your odd accounts please<a href="#">click here</a></h5>
      </div>
    </section>
  </div>
</body>
</html>