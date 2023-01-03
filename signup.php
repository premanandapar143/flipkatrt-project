<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  header("Location: index.php");
}
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $number = $_POST["number"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirmpassword = $_POST["confirmpassword"];
  $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE number = '$number' OR email = '$email'");
  if(mysqli_num_rows($duplicate) > 0){
    echo
    "<script> alert('Username or Email Has Already Taken'); </script>";
  }
  else{
    if($password == $confirmpassword){
      $query = "INSERT INTO tb_user VALUES('','$name','$number','$email','$password')";
      mysqli_query($conn, $query);
      echo
      "<script> alert('Registration Successful'); </script>";
    }
    else{
      echo
      "<script> alert('Password Does Not Match'); </script>";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="image/red_star_PNG44.png" />
</head>
<style>
    .signup-box{
    width: 360px;
    height: 620px;
    margin: auto;
}
body{   
    margin: 0;
    padding: 0;
    font-family: montserrat;
    background-color: blanchedalmond;
    height: 100vh;
    overflow: hidden;
}
h1{
    text-align: center;
    padding-top: 15px ;
}
form{
    width: 300px;
    margin-left: 20px;
}
form label{
    display: flex;
    margin-top: 20px;
    font-size: 18px;
}
form{
    background-color: rgb(255, 255, 255);
    width: 450px;
    padding: 50px 40px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 8px;
    box-shadow: 20px 20px 30px rgba(0, 0,0,0.15);
}
form input{
    width: 100%;
    padding: 8px;
    border: none;
    border: 1px solid gray;
   
    border-radius: 6px;
    outline: none;
}
button[type="submit"]{
    background-color: red;
    border: none;
    color: white;
    font-weight: 500;
    font-size: 18px;
    letter-spacing: 2px;
    cursor: pointer;
    margin-top: 20px;
}
</style>
<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <form action="" method="post" autocomplete="off" >
            <label for="name">Full Name</label>
            <input type="text" name="name" id = "name" required value="">
            <label for="email">Email : </label>
            <input type="email" name="email" id = "email" required value="">
            <label>Mobile Number</label>
            <input type="number" name="number" id = "number" required value="">
            <label for="password">Password</label>
            <input type="password" name="password" id = "password" required value="">
            <label for="confirmpassword">Confirm Password : </label>
            <input type="password" name="confirmpassword" id = "confirmpassword" required value="">
            <button type="submit" name="submit">Register</button>
            <button type="submit" onclick="document.location='login.php'">login</button>
        </form>
    </div>
</body>