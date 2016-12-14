<?php

   session_start();
   if (isset($_SESSION['username']))
   {
       
      if($_SESSION["level"]>20){
         header ("Location: levels/congratulations.php");
      }
      else {
         header ("Location:"."levels/level".$_SESSION["level"].".php");
      }
   }
?>
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Labyrinth 7.0 | Spring Fest 2017</title>
   <link rel="shortcut icon" href="images/favicon.png">
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/preloader.css"> 
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body onload="preloader()">
   <div id="loader-wrapper">
      <div id="loader">
         <div class="content">      
            <div class="circle">
               <span class="dot no1">s</span>
               <span class="dot no2"></span>
               <span class="dot no3"></span>
               <span class="dot no4"></span>
               <span class="dot no5"></span>
               <span class="dot no6"></span>
               <span class="dot no7"></span>
               <span class="dot no8"></span>
               <span class="dot no9"></span>
               <span class="dot no10"></span>
               <span class="dot no11"></span>
               <span class="dot no12"></span>
               <span class="dot no13"></span>
               <span class="dot no14"></span>
               <span class="dot no15"></span>
            </div>
         </div>
      </div>
      <div class="loader-section section-left">
         <div id="loadFest">#Sf2k17</div>
      </div>
      <div class="loader-section section-right">
         <div id="hashTag">#labyrinth7.0</div>
      </div>
   </div>
   <div id="background" class="mouse-bg" style="background-image: url('images/bg.png');"></div>
   <div class="foreground"></div>
   <div id="inner">
      <nav>
         <div class="container">
            <div class="nav-wrapper">
               <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="about.php">About</a></li>
                  <li><a href="rules.php">Rules</a></li>
                  <li><a href="credits.php">Credits</a></li>
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
         </div>
         <div class="introSect login">
	        <div class="loginHome">
	            <div class="buttonCont">
	            	<input type="button" class="button" id="signIn" value="SIGN IN">
	            </div>
	            <div class="buttonCont">
	            	<input type="button" class="button" id="signUp" value="SIGN UP">
	            </div>
	        </div>
	        <div class="loginPage">
	        	  <div class="buttonCont">
	            	<input id='user-credentials' type='text' class="inputType"  autofocus="autofocus"  placeholder="  Username.." >
	            </div>
	            <div class="buttonCont">
	            	<input id='user-password' type="password" class="inputType" placeholder="  Passcode..">
	            </div>
	            <div class="buttonCont">
	            	<input type="button" class="button" id='login-button' value="ENTER">
	            </div>
	            <div class="noAccount buttonCont">
	            	Don't have an account? sign up <input type="button" class="noAcBtn" id="noAcBtn" value="Here">

	            </div>
	        </div>
           <div class="signUpPage">
              <div class="buttonCont signUpCont">
                  <input id='username' type='text' class="inputType" autofocus="autofocus" placeholder="  Username.." >
               </div>
               <div class="buttonCont signUpCont">
                  <input type="email" id='email' class="inputType" placeholder="  E-Mail..">
               </div>
               <div class="buttonCont signUpCont">
                  <input type="number" id='contact' class="inputType" placeholder="  Contact No..">
               </div>
               <div class="buttonCont signUpCont">
                  <input type="password" id='password' class="inputType" placeholder="  Passcode..">
               </div>
               <div class="buttonCont signUpCont">
                  <input type="password" id='re-password' class="inputType" placeholder="  Verify Passcode..">
               </div>
               <div class="buttonCont signUpCont">
                  <input type="button" class="button" id='signup-button' value="SIGN UP">
               </div>
               <div class="alreadyMember buttonCont">
                  Have an account? log in <input type="button" class="noAcBtn" id="accBtn" value="Here">

               </div>
           </div>
         </div>
      </div>

      <div class="bottom">
         <div id="iitkgpsf">
            <a href="http://iitkgp.ac.in/" target="_blank"><img class="iitLogo" src="images/iit.png"></a>
            <a href="http://springfest.in/" target="_blank"><img class="iitLogo" src="images/favicon.png"></a>
         </div>
         <div id="sponsors">
            <a href="#" target="_blank"><img class="iitLogo" src="images/kaspersky.png"></a>
            <a href="#" target="_blank"><img class="iitLogo" src="images/znetlivelogo.png"></a>
         </div>
      </div>
      <div class="sidePanel">
      	<div class="social">
            <a href="#">
               <div class="socialDiv">
                  <i class="fa fa-facebook-f" style="font-size:32px"></i>
               </div>
            </a>
            <a href="#">
               <div class="socialDiv">
                  <i class="fa fa-twitter" style="font-size:32px"></i>
               </div>
            </a>
            <a href="#">
               <div class="socialDiv">
                  <i class="fa fa-youtube-play" style="font-size:32px"></i>
               </div>
            </a>
         </div>
      </div>
   </div>

   <script src="script/jquery.js"></script>
   <script src="script/loginclass.js" ></script>
   <script src="script/mouse.parallax.js"></script>
   <script src="script/script.js"></script>
</body>
</html>