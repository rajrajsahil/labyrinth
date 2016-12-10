<?php
     $pagen = 9;
     include "../levels.php";
     include "header.php";
  ?>
      <div id="intro">
      
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 9</h1>
             </div>
             <p>Description</p>
         </div>
         <div id="levelRight">
             <img id="images" src="../images/maxresdefault.jpg">
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
<script type="text/javascript">
        var clickcount =0;
        $("#images").click(function(){
            
            clickcount++;
            console.log(clickcount);
            if(clickcount%3==1)
            {   
                //alert("clicked");
                $(this).attr("src","../images/dus8P.jpg");
            }
            else if(clickcount%3==2)
            {   
                //alert("clicked");
                $(this).attr("src","../images/464990-26-11-attack.jpg");
            }
            else
            {
                 $(this).attr("src","../images/maxresdefault.jpg");
            }
        });
</script>

