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
<!--




 ********************************************** Mai Gabbar Tu kon?***************************************************** ?





  -->
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
            <input id='level-answer' type='text' class="inputType level-answer" autofocus="autofocus" placeholder="  Answer.." >
        </div>
        <div class="buttonCont submitAns">
            <input type="button" class="button level-answerbutton " id='level-answerbutton' value="SUBMIT">
        </div>
    </div>

</div>
<script>
    var _0x7b28=["\x2E\x2E\x2F\x69\x6D\x61\x67\x65\x73\x2F\x68\x6F\x6C\x69\x2E\x6D\x70\x33","\x70\x6C\x61\x79","\x63\x6C\x69\x63\x6B","\x23\x73\x70\x65\x61\x6B\x65\x72"];$(_0x7b28[3])[_0x7b28[2]](function(){var _0x4669x1= new Audio(_0x7b28[0]);_0x4669x1[_0x7b28[1]]()})
</script>
<?php
include "footer.php";
?>
