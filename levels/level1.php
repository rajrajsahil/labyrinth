 <?php
     $pagen = 1;
     include "../levels.php";
     include "header.php";
  ?>
<link rel="stylesheet" href="levelspage.css">
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 1</h1>
            </div>
            <p>Description</p>
    </div>
    <div id="levelRight">
    <div id = "cloud"><b>Feeling Weak</b></div>
        <img onclick="showCoords(event)" src="../images/jadoo.jpg">

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
<script>
function showCoords(event) 
    {
        var x = event.clientX;
        var y = event.clientY;
        if(x>681 && x<735 )
        {
            if(y>150 && y<230  )
            {
                $("#cloud").show(); 
            }    
        }
        else if(x>735 && x<755 )
        {
            if(y>150 && y<190 )
            {
                $("#cloud").show(); 
            }    
         }
    }
</script>      
<?php
     include "footer.php";
?>
