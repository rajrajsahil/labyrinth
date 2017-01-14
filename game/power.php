 <?php
 $pagen = 6;
 include "../levels.php";
 include "header.php";
 ?>
 <style>
    #containerImg
    {
        background:#2EB5E5 ;
        height:65vh;
        width:48vw;
        margin-top:6vh;
        margin-left:17vw;
        border-radius:5px;
    }
    #alienImg
    {
        transform:scale(0.7);
        position:absolute;
        top:37vh;
        left:17vw;

    }
    #cloudImg1
    {
        position:absolute;
        transform:scale(0.65);
        top:5vh;
        left:10vw;
    }
    #cloudImg2
    {
        position:absolute;
        transform:scale(0.65);
        top:13vh;
        left:20vw;
    }

    #cloudImg3
    {
        width:35%;
        height:25%;
        position:absolute;
        top:30vh;
        left:35vw;
        transform:rotateX(180deg);
    }
    #cloudImg4
    {
        transform:scale(0.5);
        position:absolute;
        left:40vw;
        top:25vh;
    }

    .sun { 
        position: absolute;
        top:10vh;
        left:52vw;  
        width:8vw;
        height:8vw;
        border-radius:50%;  
        background:white;
        opacity:0.9;            
        box-shadow: 0px 0px 40px 15px white;  
    }
    h2
    {
        margin-top:10vh;
    }
</style>
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 6</h1>
        </div>
        <h2></h2>
    </div>
    <div id="containerImg" >
        <div class="sun"></div>
        <img id="cloudImg1" src="../images/cloud1.png" />
        <img id="cloudImg2" src="../images/cloud1.png" />
        <img id="cloudImg3"  src="../images/cloud1.png" />
        <img id="cloudImg4" src="../images/cloud1.png" />
        <img id="alienImg" src="../images/jadoo.png">
    </div>

</div>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<script>
var _0x609a=["\x46\x65\x65\x6C\x69\x6E\x67\x20\x57\x65\x65\x6B\x20\x21","\x74\x65\x78\x74","\x68\x32","\x63\x6C\x69\x63\x6B","\x23\x61\x6C\x69\x65\x6E\x49\x6D\x67","\x70\x6F\x73\x69\x74\x69\x6F\x6E","\x6C\x65\x66\x74","\x74\x6F\x70","\x64\x72\x61\x67\x67\x61\x62\x6C\x65","\x23\x63\x6C\x6F\x75\x64\x49\x6D\x67\x32","\x23\x63\x6C\x6F\x75\x64\x49\x6D\x67\x33","\x2E\x2E\x2F\x63\x6F\x6E\x74\x72\x6F\x6C\x6C\x65\x72\x2E\x70\x68\x70","\x6E\x65\x78\x74\x6C\x65\x76\x65\x6C","\x73\x75\x63\x63\x65\x73\x73\x66\x75\x6C","\x50\x4F\x53\x54","\x6C\x6F\x63\x61\x74\x69\x6F\x6E","\x2E\x70\x68\x70","\x61\x6A\x61\x78"];$(_0x609a[4])[_0x609a[3]](function(){$(_0x609a[2])[_0x609a[1]](_0x609a[0])});var pos2,pos3,flag1=0,flag2=0;$(_0x609a[9])[_0x609a[8]]({stop:function(_0x85d9x5,_0x85d9x6){pos2= $(this)[_0x609a[5]]();if((pos2[_0x609a[6]]< 230&& pos2[_0x609a[7]]< 150)|| (pos2[_0x609a[6]]< 424&& pos2[_0x609a[7]]< 50)|| (pos2[_0x609a[6]]> 450&& pos2[_0x609a[7]]> 230)){flag1= 1;check()}else {flag1= 0}}});$(_0x609a[10])[_0x609a[8]]({stop:function(_0x85d9x5,_0x85d9x6){pos3= $(this)[_0x609a[5]]();if((pos3[_0x609a[6]]< 230&& pos3[_0x609a[7]]< 170)|| (pos3[_0x609a[6]]< 390&& pos3[_0x609a[7]]< 75)|| (pos3[_0x609a[6]]> 450&& pos3[_0x609a[7]]> 230)){flag2= 1;check()}else {flag2= 0}}});function check(){if(flag1== 1&& flag2== 1){$[_0x609a[17]]({url:_0x609a[11],data:{functionname:_0x609a[12],answer:_0x609a[13]},type:_0x609a[14],success:function(_0x85d9x8){window[_0x609a[15]]= _0x85d9x8+ _0x609a[16]}})}}
</script>
<?php
include "footer.php";
?> 