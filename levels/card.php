<?php
$pagen = 18;
include "../levels.php";
include "header.php";
?>
<style>
    #iconFa
    {
        cursor:pointer;
        font-size:20px;
        position:absolute;
        top:2vh;
        left:65vw;
    }
    .cardImg
    {
        transform:scale(0.45);
    }
    .containImgDown
    {
        position:absolute;
        padding:0;
    }
    .containImgUp
    {
        position:absolute;
        padding:0;
        display:none;
    }
    #containerImg1
    {
        top:25vh;
        left:15vw;
    }
    #containerImg2
    {
        top:25vh;
        left:22vw;
    }
    #containerImg3
    {
        top:25vh;
        left:29vw;
    }
    #containerImg4
    {
        top:25vh;
        left:36vw;
    }
    #containerImg5
    {
        top:25vh;
        left:43vw;
    }
    #containerImg6
    {
        top:25vh;
        left:50vw;
    }
    #containerImg7
    {
        top:25vh;
        left:57vw;
    }
    /* upper cards*/
    #containerImg8
    {
        top:-5vh;
        left:15vw;
    }
    #containerImg9
    {
        top:-5vh;
        left:22vw;
    }
    #containerImg10
    {
        top:-5vh;
        left:29vw;
    }
    #containerImg11
    {
        top:-5vh;
        left:36vw;
    }
    #containerImg12
    {
        top:-5vh;
        left:43vw;
    }
    #containerImg13
    {
        top:-5vh;
        left:50vw;
    }
    #containerImg14
    {
        top:-5vh;
        left:57vw;
    }
    .buttonCont
    {
        display:none;
    }
</style>




<div id="intro">
   <div id="levelLeft">
       <div id="levelHead">
           <h1>Level 18</h1>
       </div>
       <i class="fa fa-power-off " id="iconFa"></i>
       <h2 id="hint1"></h2>
   </div>
   
   <div class="containImgDown" id="containerImg1">
    <img class="cardImg" id="cardImg1" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg2">
    <img class="cardImg" id="cardImg2" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg3">
    <img class="cardImg" id="cardImg3" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg4">
    <img class="cardImg" id="cardImg4" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg5">
    <img class="cardImg" id="cardImg5" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg6">
    <img class="cardImg" id="cardImg6" src="../images/card.jpeg">
</div>
<div class="containImgDown" id="containerImg7">
    <img class="cardImg" id="cardImg7" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg8">
    <img class="cardImg" id="cardImg8" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg9">
    <img class="cardImg" id="cardImg9" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg10">
    <img class="cardImg" id="cardImg10" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg11">
    <img class="cardImg" id="cardImg11" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg12">
    <img class="cardImg" id="cardImg12" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg13">
    <img class="cardImg" id="cardImg13" src="../images/card.jpeg">
</div>
<div class="containImgUp" id="containerImg14">
    <img class="cardImg" id="cardImg14" src="../images/card.jpeg">
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
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script>

var _0xb6c8=["\x66\x61\x64\x65\x49\x6E","\x2E\x63\x6F\x6E\x74\x61\x69\x6E\x49\x6D\x67\x55\x70","\x63\x6C\x69\x63\x6B","\x23\x69\x63\x6F\x6E\x46\x61","\x64\x72\x61\x67\x67\x61\x62\x6C\x65","\x70\x6F\x73\x69\x74\x69\x6F\x6E","\x23\x63\x6F\x6E\x74\x61\x69\x6E\x65\x72\x49\x6D\x67","\x6C\x65\x66\x74","\x61\x62\x73","\x74\x6F\x70","\x5F\x5F\x5F\x50\x45\x5F\x5F\x5F","\x74\x65\x78\x74","\x23\x68\x69\x6E\x74\x31","\x73\x68\x6F\x77","\x2E\x62\x75\x74\x74\x6F\x6E\x43\x6F\x6E\x74"];$(_0xb6c8[3])[_0xb6c8[2]](function(){$(_0xb6c8[1])[_0xb6c8[0]]()});$(_0xb6c8[1])[_0xb6c8[4]]({stop:function(_0xca89x1,_0xca89x2){check()}});function check(){var _0xca89x4=0,_0xca89x5,_0xca89x6;for(var _0xca89x7=1;_0xca89x7<= 7;_0xca89x7++){var _0xca89x8=_0xca89x7+ 7;_0xca89x5= $(_0xb6c8[6]+ _0xca89x7)[_0xb6c8[5]]();_0xca89x6= $(_0xb6c8[6]+ _0xca89x8)[_0xb6c8[5]]();if(Math[_0xb6c8[8]](_0xca89x5[_0xb6c8[7]]- _0xca89x6[_0xb6c8[7]])< 30&& (_0xca89x5[_0xb6c8[9]]- _0xca89x6[_0xb6c8[9]])< 120){_0xca89x4++}};if(_0xca89x4== 7){$(_0xb6c8[12])[_0xb6c8[11]](_0xb6c8[10]);$(_0xb6c8[14])[_0xb6c8[13]]()}}
</script>
<?php
include "footer.php";
?>
