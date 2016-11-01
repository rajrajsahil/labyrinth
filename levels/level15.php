<?php
     $pagen = 15;
     include "../levels.php";
     include "header.php";
  ?>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 15</h1>
             </div>
             <p>Description</p>
         </div>
         <div id="levelRight">
             <img src="../images/gravity-detached.jpg">
         </div>
         <div id="answer">
             <div class="buttonCont">
                <input id='level-answer' type='text' class="inputType level-answer" placeholder="  Answer.." >
            </div>
            <div class="buttonCont submitAns">
                <input type="button" class="button level-answerbutton" id='level-answerbutton' value="SUBMIT">
            </div>
         </div>

      </div>
<?php
     include "footer.php";
?>
