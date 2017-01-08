<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/png" href="../images/director.png"/>
  </head>
</head>
<body>

</body>
</html>
<?php
     $pagen = 19;
     include "../levels.php";
     include "header.php";
  ?>
  
  <style type="text/css">
  	#upper {
			height:50%;
  	}
  	#down {
  		height:50%;
  	}
  	a {
  		text-decoration: none;
  		color: #ffffff;
  		cursor: default;
  	}

  </style>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 19</h1>
             </div>
             <p>hint is <a href="../images/invisible.txt" download="hint">here</a></p>
         </div>
         <div id="levelRight">
         	<div id="upper">
            	<img src="../images/orphan.jpg">
            </div>

            <!-- 




				aftab shivdasani and ahmad khan is orphan 



			-->
            <div id="down">
            	<img src="../images/calender.jpg">
            </div>
         </div>

         <div id="answer">
             <div class="buttonCont">
                <input id='level-answer' type='text' class="inputType level-answer"  autofocus="autofocus" placeholder="  Answer.." >
            </div>
            <div class="buttonCont submitAns">
                <input type="button" class="button level-answerbutton" id='level-answerbutton' value="SUBMIT">
            </div>
         </div>

      </div>
<?php
     include "footer.php";
?>
