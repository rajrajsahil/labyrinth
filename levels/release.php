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
    <script>
      var _0x5be5=["\x76\x6F\x6C\x75\x6D\x65","\x66\x6C\x6F\x6F\x72","\x64\x61\x74\x61","\x61\x62\x73","\x61\x63\x74\x69\x76\x65\x2D\x72\x69\x67\x68\x74","\x72\x65\x6D\x6F\x76\x65\x43\x6C\x61\x73\x73","\x23\x72\x69\x67\x68\x74\x44\x6F\x6F\x72","\x61\x63\x74\x69\x76\x65\x2D\x6C\x65\x66\x74","\x23\x6C\x65\x66\x74\x44\x6F\x6F\x72","\x74\x72\x61\x6E\x73\x69\x74\x69\x6F\x6E","\x61\x6C\x6C\x20","\x6D\x73\x20\x6C\x69\x6E\x65\x61\x72","\x63\x73\x73","\x23\x65\x6C\x65\x76\x61\x74\x6F\x72\x43\x6F\x6E\x74\x61\x69\x6E\x65\x72","\x62\x6F\x74\x74\x6F\x6D","\x25","\x73\x68\x6F\x77","\x23\x6C\x65\x76\x65\x6C\x4C\x65\x66\x74\x20\x23\x64\x61\x74\x65\x4F\x66\x52\x65\x6C","\x68\x69\x64\x65","\x70\x6C\x61\x79","\x61\x64\x64\x43\x6C\x61\x73\x73","\x63\x6C\x69\x63\x6B","\x6C\x69","\x72\x65\x61\x64\x79"];audio[_0x5be5[0]]= 0.5;var current=0;$(document)[_0x5be5[23]](function(){$(_0x5be5[22])[_0x5be5[21]](function(){var _0x3c48x2=parseInt($(this)[_0x5be5[2]](_0x5be5[1])),_0x3c48x3=_0x3c48x2* 20,_0x3c48x4=Math[_0x5be5[3]](current- _0x3c48x2)* 1000;$(_0x5be5[6])[_0x5be5[5]](_0x5be5[4]);$(_0x5be5[8])[_0x5be5[5]](_0x5be5[7]);setTimeout(function(){$(_0x5be5[13])[_0x5be5[12]](_0x5be5[9],_0x5be5[10]+ _0x3c48x4+ _0x5be5[11]);$(_0x5be5[13])[_0x5be5[12]](_0x5be5[14],_0x3c48x3+ _0x5be5[15]);current= _0x3c48x2;setTimeout(function(){if(_0x3c48x2== 3){setTimeout(function(){$(_0x5be5[17])[_0x5be5[16]]()},400)}else {setTimeout(function(){$(_0x5be5[17])[_0x5be5[18]]()},400)};audio[_0x5be5[19]]();$(_0x5be5[6])[_0x5be5[20]](_0x5be5[4]);$(_0x5be5[8])[_0x5be5[20]](_0x5be5[7])},_0x3c48x4)},300)})})
    </script>

    <?php
    include "footer.php";
    ?>
