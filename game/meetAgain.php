<?php
$pagen = 1;
include "../levels.php";
include "header.php";
?>
<div id="intro">
   <div id="levelLeft">
       <div id="levelHead">
           <h1>Level 1</h1>
       </div>
       <h2>Hai Himmat Aaaega !</h2>
   </div>
   <div id="levelRight">
       <img src="../images/sept.jpg">
   </div>
   <div id="answer">
       <div class="buttonCont">
        <input id='level-answer' type='text' class="inputType level-answer" autofocus="autofocus"  placeholder="  Answer.." >
    </div>
    <div class="buttonCont submitAns">
        <input type="button" class="button level-answerbutton" id='level-answerbutton' value="SUBMIT">
    </div>
</div>

</div>
<?php
include "footer.php";
?>
