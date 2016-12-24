<?php
     $pagen = 5;
     include "../levels.php";
     include "header.php";
  ?>

<style>
#speaker
{
    width:30%;
    height:30%;
    z-index:2;
}
</style>

<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 5</h1>
        </div>        
        <img id="speaker" src="../images/speaker.png">
    </div>   
    <div id="levelRight">
        <img src="../images/sholay.jpg">
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
 <!-- <script src="../script/jquery.js" ></script> -->
<script>
    $('#speaker').click(function(){
        var holi = new Audio("../images/holi.mp3");
        holi.play();
    });
</script>
<?php
     include "footer.php";
?>
