<?php
     // $pagen = 16;
     // include "../levels.php";
     include "header.php";
  ?>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 16</h1>
             </div>
             <p>Description</p>
         </div>
         <div id="levelRight">
             <h1 id="levelRighth1">LOOK</h1>
         </div>
         <!--https://www.google.co.in/search?q=english+to+hindi&oq=eng&aqs=chrome.0.69i59j69i57j69i61j69i60j69i61j69i59.2208j0j1&sourceid=chrome&ie=UTF-8-->
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
    $(document).ready(function(){
        var count = 0;
        $(document).on("click", "#levelRighth1", function(){
            count++;
            if(count%3==1 || count%3==2){
                $(this).html("AGAIN");
            }
            else{
               $(this).html("LOOK"); 
            }
            var left = Math.floor(Math.random()*400);
            var top = Math.floor(Math.random()*300);
            console.log(left);
            $(this).css('padding-left',+left+'px');
            $(this).css('padding-top',+top+'px');
        });
    });
</script>