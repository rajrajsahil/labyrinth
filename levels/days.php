<?php
     $pagen = 10;
     include "../levels.php";
     include "header.php";
  ?>
  <style type="text/css">
      #circle{
        cursor: default;
      }
  </style>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 10</h1>
             </div>
             <p>Rang de tu mohe ...</p>
         </div>
         <div id="levelRight">
             <img src="../images/gerua.png" usemap="#color"  >
             <map name="color">
                <area id="circle" shape="circle" coords="166,50,52" alt="Venus">
             </map>
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
<script type="text/javascript">
    $(document).ready(function(){
        var count=0;
        $(document).on('click','#circle',function(){
            count++;
            if(count%2!=0)
            {
                $("#level-answer").attr("placeholder","15 saal 4 mahine ...");
            }
            else
            {
                $("#level-answer").attr("placeholder","  Answer..");
            }
        });
    })
</script>
