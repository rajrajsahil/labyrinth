<?php
     $pagen = 14;
     include "../levels.php";
     include "header.php";
  ?>

      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 14</h1>
             </div>
             <h2 id="description">Hint &darr;</h2> 
             <div>
                  <img id="todrag" src="../images/akshay.jpg" draggable="true" ondragstart="drag(event)">
             </div>
         </div>
         <div id="levelRight">
             <img id="ondrag" src="../images/house.jpg" ondrop="drop(event)" ondragover="allowDrop(event)">
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
<?php
     include "footer.php";
?>
<script type="text/javascript">
    function allowDrop(ev)
    {
        ev.preventDefault();
       
    }
    function drag(ev)
    {
        ev.dataTransfer.setData("text", ev.target.id);
    }
    function drop(ev)
    {
        ev.preventDefault();
        var data = ev.dataTransfer.getData("text");
        ev.target.appendChild(document.getElementById(data));
        if(data=="todrag")
        {
            $("#ondrag").attr("src","../images/sangarsh.jpg");
            $("#description").html("What's my name");
        }
    }

</script>
