<?php
session_start();
if (isset($_SESSION['username'])) {
	header ('Location: level1.php');
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Labyrinth 7.0 | Spring Fest 2017</title>
   <link rel="shortcut icon" href="favicon.png">
   <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre" rel="stylesheet">
   <link rel="stylesheet" href="css/main.css">
</head>
<body>
   <div id="background" class="mouse-bg" style="background-image: url('images/bg.png');"></div>
   <div class="foreground"></div>
   <div id="inner">
      <nav>
         <div class="container">
            <div class="nav-wrapper">
               <ul>
                  <li><a href="sass.html">Home</a></li>
                  <li><a href="badges.html">About</a></li>
                  <li><a href="sass.html">Rules</a></li>
                  <li><a href="sass.html">Credits</a></li>
                  <li><a href="collapsible.html">Forum</a></li>
               </ul>
            </div>
         </div>   
      </nav>

      <div class="sideLogo">
         <h1 class="labyrinth"><a href="#">Labyrinth 7.0</a></h1>
      </div>
      <div id="intro">
         <div class="introSect hi">
         	<div class="spring introtext">Spring</div>
         	<div class="fest introtext">Fest</div>
         	<div class="iitName introtext">IIT Kharagpur</div>
         	<div class="presents introtext">presents</div>
         	<div class="Labyrinth7 introtext">Labyrinth</div>
         	<div class="lab7 introtext">7.0</div>
         	<!-- <div class="sponsoredBy introtext">sponsored by</div>
         	<img class="cisco introtext" src="images/cisco_logo.png"> -->
         </div>
         <div class="introSect login">
	        <div class="loginHome">
	            <div class="buttonCont">
	            	<input type="button" class="button" value="SIGN IN">
	            </div>
	            <div class="buttonCont">
	            	<input type="button" class="button" value="SIGN UP">
	            </div>
	        </div>
	        <div class="loginPage">
	        	<div class="buttonCont">
	            	<input id='user-credentials' type='text' class="inputType" placeholder="Username.." >
	            </div>
	            <div class="buttonCont">
	            	<input id='user-password' class="inputType" placeholder="Passcode..">
	            </div>
	            <div class="buttonCont">
	            	<input type="button" class="button" id='login-button' value="ENTER">
	            </div>
	            <div class="noAccount buttonCont">
	            	Don't have an account, sign up <input type="button" class="noAcBtn" value="Here">

	            </div>
	        </div>

         </div>
      </div>

      <div class="bottom">ss</div>
      <div class="sidePanel">
      	<a href="http://iitkgp.ac.in/"><img class="iitLogo" src="images/iit.png"></a>
      </div>
   </div>
   <!-- <input id='user-credentials' type = 'text' placeholder="Username or Email" >
   <input id='user-password' placeholder="Password">	
   <button id='login-button'>LogIn</button> 
   <br>
   <input  id='username' type = 'text' placeholder="Username" >
	<input  id='email' type = 'text' placeholder="email" >
	<input  id='contact' type = 'text' placeholder="contact" >			
   <input   id='password' placeholder="Password">
   <input   id='re-password' placeholder="Re-Password">
   <button id='signup-button'>Signup</button> --> 

   <script src="script/jquery.js"></script>
   <script src="loginclass.js" ></script>
   <script src="script/mouse.parallax.js"></script>
   <script src="script/script.js"></script>
</body>
</html>