<?php
     $pagen = 20;
     include "../levels.php";
     include "header.php";
  ?>

<!--*******************************This might be helpful : https://en.wikipedia.org/wiki/Sri !!********************* -->
  <style>
    #levelRight{
        width:65%;
        padding-left:60px;
        padding-top:30px;
        float: left;
        height: 80%;
        overflow: hidden;
    }
    #levelRight img{
       width:500px;
       height:340px;
       
    }
</style>
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 20</h1>
        </div>
        <h3>Do not turn around to look</h3>
    </div>
    <div id="levelRight">
        <img  src="../images/turn.gif"">
    </div>
    <div id="answer">
        <div class="buttonCont">
            <input id='level-answer' type='text' class="inputType level-answer" autofocus="autofocus" placeholder="  Answer.." >
        </div>
        <div class="buttonCont submitAns">
             <input type="button" class="button level-answerbutton" id='level-answerbutton' value="SUBMIT">
        </div>
    </div>

</div>
<?php
     include "footer.php";
?>
