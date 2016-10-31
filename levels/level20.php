<?php
$pagen = 20;
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
      <?php
       include "header.php";
      ?>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 20</h1>
             </div>
             <p>Description</p>
         </div>
         <div id="levelRight">
             <img src="../images/gravity-detached.jpg">
         </div>
         <div id="answer">
             <div class="buttonCont">
                <input id='level-ans' type='text' class="inputType level-answer" placeholder="  Answer.." >
            </div>
            <div class="buttonCont submitAns">
                <input type="button" class="button level-answerbutton" id='submit-button' value="SUBMIT">
            </div>
         </div>

      </div>
      <?php
         include "footer.php";
       ?>
   </div>

   <script src="../script/jquery.js"></script>
   <script src="../script/loginclass.js" ></script>
   <script src="../script/mouse.parallax.js"></script>
   <script src="../script/script.js"></script>
</body>
</body>
</html>
