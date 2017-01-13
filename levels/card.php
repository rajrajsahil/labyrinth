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

    $('#iconFa').click(function(){
        $(".containImgUp").fadeIn();
    });
    $(".containImgUp").draggable({
        stop:function(event,ui) {        
            check();
        }
    });
    function check(){
        var flag=0,posUp,posDown;
        for(var i=1;i<=7;i++)
        {
            var j=i+7;
            posUp=$("#containerImg"+i).position();
            posDown=$("#containerImg"+j).position();
            if(Math.abs(posUp.left-posDown.left)<30 && (posUp.top-posDown.top)<120)
                flag++;
        }
        if (flag==7)
        {
            $("#hint1").text("___PE___");
            $(".buttonCont").show();
        }

    }

</script>
<?php
include "footer.php";
?>
