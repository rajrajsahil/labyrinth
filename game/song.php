<?php
$pagen = 7;
include "../levels.php";
include "header.php";
?>
<!--


********************************************************** 2 cube = 8 **********************************************************


-->
<div id="intro">
   <div id="levelLeft">
       <div id="levelHead">
           <h1>Level 7</h1>
       </div>
       
   </div>
   <div id="levelRight">
       <img src="../images/himesh.jpg">
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
