<?php
     $pagen = 21;
     //include "../levels.php";
     include "header.php";
  ?>
  <style type="text/css">
      #radio{
        cursor:default;
      }
      #audio{
        display:none;
      }
  </style>
      <div id="intro">
      
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 21</h1>
             </div>
             <p>Which movie is this??</p>
         </div>
         <div id="levelRight">
             <img src="../images/pk.jpg" usemap="#radio">
         </div>
         <map name="radio">

             <area id="radio" shape="circle" coords="370,190,20" alt="Venus">
         </map>
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
<script type="text/javascript">
var audio = new Audio("../images/radio.mp3");
var count=0;
$(document).on('click','#radio',function(){
    //alert("hai");
    count++;
    if(count%2==1)
    {
        audio.play();
    }
    else
    {
        audio.pause();
    }
    
        
    
})

</script>