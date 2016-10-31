<?php
$pagen = 1;
include "../levels.php";
?> 
<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Labyrinth 7.0 | Spring Fest 2017</title>
   <link rel="shortcut icon" href="../images/favicon.png">
   <link rel="stylesheet" href="../css/main.css">
   <link rel="stylesheet" href="../css/levels.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
</head>
<body>
   <div id="background" class="mouse-bg" style="background-image: url('../images/bg.png');"></div>
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
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 1</h1>
             </div>
             <p>Description</p>
         </div>
         <div id="levelRight">
             <img src="../images/gravity-detached.jpg">
         </div>
         <div id="answer">
             <div class="buttonCont">
                <input id='level1-ans' type='text' class="inputType level-answer" placeholder="  Answer.." >
            </div>
            <div class="buttonCont submitAns">
                <input type="button" class="button level-answerbutton" id='submit1-button' value="SUBMIT">
            </div>
         </div>

      </div>

      <div class="bottom">
         <a href="http://iitkgp.ac.in/" target="_blank"><img class="iitLogo" src="../images/iit.png"></a>
         <a href="http://springfest.in/" target="_blank"><img class="iitLogo" src="../images/favicon.png"></a>
      </div>
      <div class="sidePanel">
        <div id="currentUser">
            <p>USERNAME</p>
            <h1><?php echo $_SESSION['username'];?></h1>
        </div>
        <div class="leaderBoard">
            <h1>Leaderboard</h1>
            <ol>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
                <li>dcsdcsdc</li>
            </ol>
        </div>
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
            <a href="#">
               <div class="socialDiv">
                  <div class="tooltip"><i class="fa fa-close" style="font-size:32px"></i>
                    <span class="tooltiptext">LOGOUT!</span>
                  </div>
               </div>
            </a>
         </div>
      </div>
   </div>

   <script src="../script/jquery.js"></script>
   <script src="../script/loginclass.js" ></script>
   <script src="../script/mouse.parallax.js"></script>
   <script src="../script/script.js"></script>
</body>
</html>
<?php
    include "../modal/winner.php";
?>
