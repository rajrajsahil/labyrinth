 <?php
     $pagen = 1;
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
            <h1>Level 1</h1>
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
$("#alienImg").click(function(){
    $("h2").text("Feeling Week !");
});
var pos2,pos3,flag1=0,flag2=0;
$("#cloudImg2").draggable({
    stop:function(event,ui) {
        pos2 =$(this).position();
       
        if((pos2.left<230 && pos2.top<150)||(pos2.left<424 && pos2.top<50)||(pos2.left>450 && pos2.top>230))
        {
           flag1=1;
           check();
        }
        else
            flag1=0;
    }
});
$("#cloudImg3").draggable({
    stop:function(event,ui) {        
        pos3 =$(this).position();
        
        if((pos3.left<230 && pos3.top<170)||(pos3.left<390 && pos3.top<75)||(pos3.left>450 && pos3.top>230))
        {
            flag2=1;
            check();
        }
        else
            flag2=0;
    }
});
function check()
{
    if(flag1==1 && flag2==1)
    {
         $.ajax({
                url: "../controller.php",
                data : {functionname:"nextlevel",answer:"successful"},
                type: "POST",
                success:function(result)
                    {
                        alert("moved to " + result);
                        window.location = result+".php";
                    }
                    
        });
    }
}

</script>
<?php
     include "footer.php";
?> 