<?php
$pagen = 11;
include "../levels.php";
include "header.php";
?>

<!-- 



*****************************PARENTS BE LIKE : THESE DAYS NEW SONGS ARE MADE BY REMIXING OLD ONES*****************************



 -->
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
         <h1>Level 11</h1>
     </div>
 </div>
 <div id="levelRight">
    <video id="myVideo" width="550" height="350" autoplay loop>
     <source src="../images/bekrar.mp4" type="video/mp4">
     </video>
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
