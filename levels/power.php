 <?php
     $pagen = 1;
     include "../levels.php";
     include "header.php";
  ?>
<style>
#cloud {
    width: 200px; height: 60px;
    background:  #f2f9fe;
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    position: absolute;
    margin: 70px  20px;
    z-index:1;
    color:black;
    padding-left:50px;
    display:none;
}

#cloud:after, #cloud:before {
    content: '';
    position: absolute;
    background: #f2f9fe;
    z-index: -1
}
#cloud:after {
    width: 100px; height: 100px;
    top: -25px; left: 20px;
    
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
}

#cloud:before {
    width: 100px; height: 100px;
    top: -25px; left: 80px;
    
    border-radius: 100px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
}
#img:hover {
    content: url('../images/srk2.jpg');
}


</style>
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 1</h1>
            </div>
            <p>Description</p>
    </div>
    <div id="levelRight">
    <div id = "cloud"><b>Feeling Weak</b></div>
        <img onclick="showCoords(event)" src="../images/Jadoo.jpg">

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
