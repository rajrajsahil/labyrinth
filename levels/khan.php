<?php
$pagen = 17;
include "../levels.php";
include "header.php";
?>
<style type="text/css">

    #yes_no {
        margin:30%;
        cursor:all-scroll;
    }
    #actor_name{
        display:none;
    }
    .buttonCont{
        display: none;
    }
</style>

<div id="intro">
   <div id="levelLeft">
       <div id="levelHead">
           <h1>Level 17</h1>
       </div>
       <p>Actor name is <span id="actor">.....</span><input type="text" id="actor_name" autofocus="autofocus"></p>
   </div>
   <div id="levelRight">
       <h1 id="yes_no">Haan<h1>
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
var _0xff1d=["\x72\x61\x6E\x64\x6F\x6D","\x48\x61\x61\x6E","\x68\x74\x6D\x6C","\x4E\x61\x61","\x63\x6C\x69\x63\x6B","\x23\x79\x65\x73\x5F\x6E\x6F","\x23\x61\x63\x74\x6F\x72","\x64\x69\x73\x70\x6C\x61\x79","\x6E\x6F\x6E\x65","\x63\x73\x73","\x69\x6E\x6C\x69\x6E\x65","\x23\x61\x63\x74\x6F\x72\x5F\x6E\x61\x6D\x65","\x6F\x6E","\x6B\x65\x79\x75\x70","\x76\x61\x6C","","\x72\x65\x70\x6C\x61\x63\x65","\x74\x6F\x4C\x6F\x77\x65\x72\x43\x61\x73\x65","\x73\x68\x61\x68\x72\x75\x6B\x68","\x6F\x66\x66","\x44\x65\x61\x72\x20\x2E\x2E\x2E\x2E","\x69\x6E\x6C\x69\x6E\x65\x2D\x62\x6C\x6F\x63\x6B","\x2E\x62\x75\x74\x74\x6F\x6E\x43\x6F\x6E\x74","\x72\x65\x61\x64\x79"];$(document)[_0xff1d[23]](function(){var _0x349ax1=0;$(_0xff1d[5])[_0xff1d[4]](function(){var _0x349ax2=Math[_0xff1d[0]]()* 10;if(_0x349ax2> 5){$(this)[_0xff1d[2]](_0xff1d[1])}else {$(this)[_0xff1d[2]](_0xff1d[3])}});$(document)[_0xff1d[12]](_0xff1d[4],_0xff1d[6],function(){_0x349ax1++;if(_0x349ax1% 2== 0){$(this)[_0xff1d[9]](_0xff1d[7],_0xff1d[8]);$(_0xff1d[11])[_0xff1d[9]](_0xff1d[7],_0xff1d[10])}});$(document)[_0xff1d[12]](_0xff1d[13],_0xff1d[11],function(){var _0x349ax3=$(this)[_0xff1d[14]]();var _0x349ax4=_0x349ax3[_0xff1d[16]](/\s/g,_0xff1d[15]);var _0x349ax5=_0x349ax4[_0xff1d[17]]();if(_0x349ax5== _0xff1d[18]){$(_0xff1d[5])[_0xff1d[19]](_0xff1d[4]);$(_0xff1d[5])[_0xff1d[2]](_0xff1d[20]);$(_0xff1d[22])[_0xff1d[9]](_0xff1d[7],_0xff1d[21])}})})
</script>
