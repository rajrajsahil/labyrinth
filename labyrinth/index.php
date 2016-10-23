<?php
session_start();
if (isset($_SESSION['username']))
{
    //$location = "level".$_SESSION["username"];
		header ("Location:"."level".$_SESSION["level"].".php");
}
?>

<!DOCTYPE html>
<html>
  <head>


  </head>
  <body>
      <input  id='user-credentials' type = 'text' placeholder="Username or Email" >
      	<input   id='user-password' placeholder="Password">
        <button id='login-button'>LogIn</button> 
        <br>
        <input  id='username' type = 'text' placeholder="Username" >
        <input  id='email' type = 'text' placeholder="email" >
        <input  id='contact' type = 'text' placeholder="contact" >
      	<input   id='password' placeholder="Password">
        <input   id='re-password' placeholder="Re-Password">
        <button id='signup-button'>Signup</button> 
        <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="loginclass.js" ></script>
  </body>
</html>