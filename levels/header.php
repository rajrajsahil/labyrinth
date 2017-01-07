<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   <title>Labyrinth 7.0 | Spring Fest 2017</title>
   <link rel="shortcut icon" href="../images/favicon.png">
   <link rel="stylesheet" href="../css/main.css">
   <link rel="stylesheet" href="../css/levels.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
   <style type="text/css">
      #incorrect_answer{
                        position: absolute;
                        top:55%;
                        left:6%;
                        z-index:2; 
                        color:red;
                        height:50px;
                        opacity: 0;
                        -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
                        -webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
                        animation-name: example;
                        animation-duration: 3s;
                        font-size: 20px;
                        display:none;

      }
      @-webkit-keyframes example {
                                    0%   {opacity:0; top:55%;}
                                    
                                    50%  {opacity:1; top:52%;}
                                    
                                    100% {opacity:0; top:40%;}
}

/* Standard syntax */
@keyframes example {
                     0%   {opacity:0; top:55%;}
                                    
                     50%  {opacity:1; top:52%;}
                                    
                     100% {opacity:0; top:40%;}
}
}
   </style>
   <script src="../script/jquery.js" ></script>
</head>
<body>
   <div id="background" class="mouse-bg" style="background-image: url('../images/bg.png');"></div>
   <div class="foreground"></div>
   <div class="ajax-progress">
      <section id="ms">
         <div class="ajaxloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
         </div>
      </section>
   </div>
   <div id="inner">
         <nav>
         <div class="container">
            <div class="nav-wrapper">
               <ul>
                  <li><a href="../index.php">Home</a></li>
                  <li><a href="../about.php">About</a></li>
                  <li><a href="../rules.php">Rules</a></li>
                  <li><a href="../credits.php">Credits</a></li>
                  <li><a href="../collapsible.html">Forum</a></li>
               </ul>
            </div>
         </div>   
      </nav>

      <div class="sideLogo">
         <h1 class="labyrinth"><a href="#">Labyrinth 7.0</a></h1>
      </div>

      <!-- For incorrect answer -->
      <div id="incorrect_answer">
         Incorrect answer &nbsp;<span><img src="../images/sad_emoji.png" height='20' width='20'></span>
      </div>
