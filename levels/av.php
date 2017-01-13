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
  var _0xefac=["\x70\x72\x65\x76\x65\x6E\x74\x44\x65\x66\x61\x75\x6C\x74","\x74\x65\x78\x74","\x69\x64","\x74\x61\x72\x67\x65\x74","\x73\x65\x74\x44\x61\x74\x61","\x64\x61\x74\x61\x54\x72\x61\x6E\x73\x66\x65\x72","\x67\x65\x74\x44\x61\x74\x61","\x67\x65\x74\x45\x6C\x65\x6D\x65\x6E\x74\x42\x79\x49\x64","\x61\x70\x70\x65\x6E\x64\x43\x68\x69\x6C\x64","\x74\x6F\x64\x72\x61\x67","\x73\x72\x63","\x2E\x2E\x2F\x69\x6D\x61\x67\x65\x73\x2F\x73\x61\x6E\x67\x61\x72\x73\x68\x2E\x6A\x70\x67","\x61\x74\x74\x72","\x23\x6F\x6E\x64\x72\x61\x67","\x57\x68\x61\x74\x27\x73\x20\x6D\x79\x20\x6E\x61\x6D\x65","\x68\x74\x6D\x6C","\x23\x64\x65\x73\x63\x72\x69\x70\x74\x69\x6F\x6E"];function allowDrop(_0x1c49x2){_0x1c49x2[_0xefac[0]]()}function drag(_0x1c49x2){_0x1c49x2[_0xefac[5]][_0xefac[4]](_0xefac[1],_0x1c49x2[_0xefac[3]][_0xefac[2]])}function drop(_0x1c49x2){_0x1c49x2[_0xefac[0]]();var _0x1c49x5=_0x1c49x2[_0xefac[5]][_0xefac[6]](_0xefac[1]);_0x1c49x2[_0xefac[3]][_0xefac[8]](document[_0xefac[7]](_0x1c49x5));if(_0x1c49x5== _0xefac[9]){$(_0xefac[13])[_0xefac[12]](_0xefac[10],_0xefac[11]);$(_0xefac[16])[_0xefac[15]](_0xefac[14])}}
</script>
