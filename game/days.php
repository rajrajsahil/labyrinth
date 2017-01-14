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
var _0x743a=["\x63\x6C\x69\x63\x6B","\x23\x63\x69\x72\x63\x6C\x65","\x70\x6C\x61\x63\x65\x68\x6F\x6C\x64\x65\x72","\x31\x35\x20\x73\x61\x61\x6C\x20\x34\x20\x6D\x61\x68\x69\x6E\x65\x20\x2E\x2E\x2E","\x61\x74\x74\x72","\x23\x6C\x65\x76\x65\x6C\x2D\x61\x6E\x73\x77\x65\x72","\x20\x20\x41\x6E\x73\x77\x65\x72\x2E\x2E","\x6F\x6E","\x72\x65\x61\x64\x79"];$(document)[_0x743a[8]](function(){var _0x9526x1=0;$(document)[_0x743a[7]](_0x743a[0],_0x743a[1],function(){_0x9526x1++;if(_0x9526x1% 2!= 0){$(_0x743a[5])[_0x743a[4]](_0x743a[2],_0x743a[3])}else {$(_0x743a[5])[_0x743a[4]](_0x743a[2],_0x743a[6])}})})
</script>
