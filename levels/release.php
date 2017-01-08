<?php
     $pagen = 8;
     include "../levels.php";
     include "header.php";
  ?>
<style>
#levelLeft #dateOfRel
{
    display:none;
    margin-top:30px;
    margin-left:30px;
    width:100px;
    height:100px;
    background:linear-gradient(to bottom, blue 0%,blue 25%,rgba(0,0,0,0.45) 25%,grey 80%,blue 80%,blue 100%);
    border-radius:5px;
    
}
#levelLeft #dateOfRel #span1
{
    margin-left:13px;
    margin-top:3px;
    position:absolute;
}
#levelLeft #dateOfRel #span2
{
    font-size:30px;
    margin-top:35px;
    position:absolute;
    margin-left:30px;
}
#levelLeft #dateOfRel #span3
{
    margin-top:80px;
    position:absolute;
    margin-left:35px;
}

#levelRight{
        width:65%;
        padding-left:60px;
        padding-top:30px;
        float: left;
        height: 80%;
        overflow: hidden;
    }
  #canvas {
    
    font-family: sans-serif;
    width: 100%;
    height: 370px;
    /*background: url(image.jpg);*/
    padding: 0;
    background-size: cover;
  }
  #canvas #building {
    width: 40%;
    background: url(../images/elevatorbg.jpg);
    height: 370px;
    margin-left:110px;
    overflow: hidden;
    box-shadow: 0  -20px  0px rgba(0,0,0,0.7);
    border-radius: 5px;
  }
  #canvas #building #elevatorShaft {
    background:#AAA;
    width: 33.33%;
    height: 370px;
    margin: 0 auto;
    position: relative;
  }
  #canvas #building #elevatorShaft #elevatorContainer {
    position: absolute;
    height: 370px;
    width: 100%;
    bottom: 0;
  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator {
    height: 20%;
    overflow: hidden;
    width: 100%;
    position: relative;
    box-shadow: 0 -10px 0 black;
    border-radius:5px;
    background: url(../images/elevatorin.jpeg);
    background-size: 100% 100%;
  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator .door {
    background: rgba(0,0,0,0.9);
    width: 49%;
    height: 100%;
    top: 0;
    position: absolute;
    transition: all 300ms ease-in;
  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator .door#leftDoor {
    left: 0;
  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator .door#rightDoor {
    right: 0;

  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator .active-right {
    right: -50% !important;
  }
  #canvas #building #elevatorShaft #elevatorContainer #elevator .active-left {
    left: -50% !important;
  }
  #canvas #building #elevatorShaft #elevatorContainer #strings {
    height: 80%;
    background: -moz-linear-gradient(left, transparent, transparent 10%, brown 10%, brown 30%, transparent 30%, transparent 40%, #CCC 40%, #CCC 60%, transparent 60%, transparent 70%, #999 70%, #999 90%, transparent 90%, transparent);
    width: 75%;
    margin: 0 auto;
  }
 #floor
  {
    text-align: center;
    width:80px;
    height:380px;
    position: absolute;
    top:12px;
    left: 80%;
    background:black;
    border-radius:5px;
  }
 #floor li {
    height:50px;
    width: 50px;
    text-align: center;
    line-height: 50px;
    border: 1px solid brown;
    margin-left: 15px;
    margin-top:5px;
    transition: all 300ms;
    border-radius: 50%;
    border: 2px solid #DDD;
    z-index:100;

  }
 #floor li:hover {
    background: #656565;
    color: #FFF;
    cursor: pointer;
    transition: all 300ms;
</style>  
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 8</h1>
            <div id="dateOfRel">
                <span id="span1">JANUARY</span>
                <span id="span2">01</span>
                <span id="span3">????</span>
            </div>
        </div>
        
    </div>
    <div id="levelRight">
        <div id="canvas">
                <div>
                    <ul id="floor"> 
                        <h4>Select your floor</h4>  
                        <li id="four" data-floor="4" >4</li>
                        <li id="three" data-floor="3" >3</li>
                        <li id="two" data-floor="2" >2</li>
                        <li id="one" data-floor="1" >1</li>
                        <li id="#zero" data-floor="0" >GL</li>    
                    </ul>
                </div>    
                <div id="building">    
                    <div id="elevatorShaft">      
                        <div id="elevatorContainer" >
                            <div id="strings"></div>
                              <div id="elevator">
                                <div class="door active-left" id="leftDoor"></div>
                                <div class="door active-right" id="rightDoor"</div>            
                              </div>           
                        </div>      
                    </div>
                </div>     
        </div>
                <audio id="audio" >
                    <source src="../images/elevatorbeep.mp3" type="audio/mpeg">
                </audio>
        </div>
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


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
<script>
  audio.volume=0.5;
  var current = 0;
  $(document).ready(function(){

    $("li").click(function(){
    
      var floor = parseInt($(this).data("floor")),
       height = floor*20,
       animate = Math.abs(current-floor)*1000;
      $("#rightDoor").removeClass("active-right");   
      $("#leftDoor").removeClass("active-left");  
      setTimeout(function(){$("#elevatorContainer").css("transition","all "+animate+"ms linear");
      $("#elevatorContainer").css("bottom",height+"%");
      current = floor;
      setTimeout(function(){
      if(floor==3)
        setTimeout(function(){$("#levelLeft #dateOfRel").show();},400);
      else
        setTimeout(function(){$("#levelLeft #dateOfRel").hide();},400);
      audio.play();
      $("#rightDoor").addClass("active-right");   
      $("#leftDoor").addClass("active-left");  
      
      },animate);},300);
    });

  });
</script>

<?php
     include "footer.php";
?>
