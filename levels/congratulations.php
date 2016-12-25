<?php
session_start();
if(!isset($_SESSION['username']))
{
header('Location:'.'../index'.'.php');
}
else
{
	if($_SESSION['level']<21)
	{
		header('Location:'.$_SESSION['levelname'].'.php');
	}
}
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
    <style type="text/css">
      #congrats{
        width:100%;
        height:100%;
      }
    </style>
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
                	<h1>Congratulation
						<?php
        				echo $_SESSION['username'];
        				echo "<br>";
    					?>
                	</h1>
            	</div>
            
			</div>
      <div id="levelRight">
              <img id="congrats" src="../images/congratulation.gif">
         </div>
        </div>

      	<?php
         include "footer.php";
       	?>
   </div>

 	


 <script src="../script/jquery.js" ></script>
 <script src="../script/main.js" ></script>

</body>
</html>