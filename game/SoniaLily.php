<?php
$pagen = 2;
include "../levels.php";
include "header.php";
?>
<style>
  #img:hover {
    content: url('../images/srk2.jpg');
  }
</style>
<div id="intro">
 <div id="levelLeft">
   <div id="levelHead">
     <h1>Level 2</h1>
   </div>
 </div>
 <div id="levelRight">
   <img id="img" src="../images/srk.jpg">
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
