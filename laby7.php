<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 <title>Labyrinth 7.0 | Spring Fest 2017</title>
 <link rel="shortcut icon" href="images/favicon.png">
 <link rel="stylesheet" href="css/main.css"> 
 <style>
  body{
    overflow: hidden;
  }
  .hi{
    position: fixed;
    top:0;
    left:0;
    right:0;
    bottom:0;
    z-index: 10;
    color: white;
  }
  .introSect{
    width:100%;
    text-align:center;
    padding: 0;
    padding-top: 100px;
  }
  .introSect div{
    text-align: center;
    width:100%;
  }
  .available{
    margin-top:20px ;
    font-size:40px;
  }
  .foreground{
    z-index:1;
  }
  #jioLogo,#iitLogo,#sfLogo{
   
    z-index:50;
    margin-top:1vw;
    margin-left:1vw;
  }
  #znetLogo{
    position:absolute;
    bottom:2vh;
    left:2vw;
    z-index:50;
  }
  #kasLogo{
    position:absolute;
    bottom:2vh;
    left:15vw;
    z-index:50;
  }



</style>
</head>
<body>
  <div id="jioLogo"><a href="https://www.jio.com/" target="_blank"><img style="width:6vw;height:5vw;" src="images/jio.png"></a></div>
  <div id="iitLogo"><a href="http://iitkgp.ac.in/" target="_blank"><img style="width:5vw;height:5vw;" src="images/iit.png"></a></div>
  <div id="sfLogo"><a href="http://springfest.in/" target="_blank"><img style="width:5vw;height:5vw;" src="images/favicon.png"></a></div>

  <div id="background" class="mouse-bg" style="background-image: url('images/bg.png');"></div>
  <div class="foreground"></div>
  
  <div class="introSect hi">
    <div class="spring introtext">Spring</div>
    <div class="fest introtext">Fest</div>
    <div class="iitName introtext">IIT Kharagpur</div>
    <div class="presents introtext">presents</div>
    <div class="Labyrinth7 introtext">Labyrinth</div>
    <div class="lab7 introtext">7.0</div>
    <div class="available introtext">We are only available on laptops and Pcs.</div>
  </div>
  <div id="znetLogo"><a href="https://www.znetlive.com/" target="_blank"><img style="width:10vw;height:5vw;" src="images/znetlivelogo.png"></a></div>
  <div id="kasLogo"><a <a href="https://www.kaspersky.co.in/" target="_blank"><img style="width:12vw;height:5vw;" src="images/kaspersky.png"></a></div>

  <script src="script/jquery.js"></script>

</body>
</html>

