<?php
     $pagen = 12;
     include "../levels.php";
     include "header.php";
  ?>
      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 12</h1>
             </div>
             <p><span id="dhoom">A.</span>&emsp; &larr; is the hint.</p>
             <p><span>B.</span>&emsp;  is <span id="queen">not</span> the hint.</p>
         </div>
         <div id="levelRight"> 
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
<script type="text/javascript">
    var flag=0;
    $("#dhoom").click(function(){
        flag=1;
        $("#levelRight").html("<img src='../images/a.JPG'>");
    });
    $("#queen").mouseover(function(){
        if(flag==1)
        {
            $("#levelRight").html("<img src='../images/robbery.jpg'>");
            $(this).html("<strong>date</strong>");

        }
    });
    $("#queen").mouseout(function(){
        if(flag==1)
        {
            $("#levelRight").html("<img src='../images/a.JPG'>");
            $(this).html("not");
        }
    })

</script>
