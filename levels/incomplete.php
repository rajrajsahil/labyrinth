<?php
     $pagen = 7;
     include "../levels.php";
     include "header.php";
  ?>
<style>
h2
{
    margin-top:10vh;
}
.imgContainer
{
    padding:0;
    position:absolute;
    transition-duration: 1s;

}
.imgContainer img
{
    height:9vw;
    width:9vw;
    cursor:pointer;
}
.clickImg
{
  -webkit-filter: grayscale(1);
    filter: grayscale(1);  
}
.button
{
    margin-top:65vh;
    margin-left:36.5vw;
    display:none;
}

</style>
<div id="intro">
    <div id="levelLeft">
        <div id="levelHead">
            <h1>Level 7</h1>
        </div>
        <h2> SWAGAT NHI KAROGE HUMARA !!!</h2>
        <input id="inputAns" type='text' class="inputType " placeholder="  Answer.." >
    </div>
    
        <!-- <img class="clickImg" src="../images/book.jpg"> -->
    <div class="imgContainer" id="container1" >
        <img class="clickImg" src ="../images/dp1.jpeg" />
    </div>
    <div class="imgContainer" id="container2">
        <img class="clickImg" src ="../images/dp2.jpeg" />
    </div>
    <div class="imgContainer" id="container3">
        <img class="clickImg" src ="../images/dp3.jpeg" />
    </div>
    <div class="imgContainer" id="container4">
        <img class="clickImg" src ="../images/dp4.jpeg" />
    </div>
    <div class="imgContainer" id="container5">
        <img class="clickImg" src ="../images/dp5.jpeg" />
    </div>
    <div class="imgContainer" id="container6">
        <img class="clickImg" src ="../images/dp6.jpeg" />
    </div>
    <div class="imgContainer" id="container7">
        <img class="clickImg" src ="../images/dp7.jpeg" />
    </div>
    <div class="imgContainer" id="container8">
        <img class="clickImg" src ="../images/dp8.jpeg" />
    </div>
    <div class="imgContainer" id="container9">
        <img class="clickImg" src ="../images/dp9.jpeg" />
    </div>
    <input type="button" class="button " value="SWAP">
</div>
<?php
     include "footer.php";
?>
<script>
$(document).ready(function(){
    $("#inputAns").keyup(function(){
        var input=$(this).val();
        input=input.replace(/\s/g,'')
        input=input.toLowerCase();
        if(input=="dabang")
        {
            $(".button").show();
            $(this).prop("readonly", true);
        }
    });
    var reset=0;
    var leftPos=[31,40.2,49.4,31,40.2,49.4,31,40.2,49.4];
    var topPos =[5,5,5,24,24,24,43,43,43];
    var arr = [];
    function rando() 
    {
        while(arr.length < 9)
        {
          var randomnumber=Math.ceil(Math.random()*9);
          var found=false;
          for(var i=0;i<arr.length;i++)
          {
            if(arr[i]==randomnumber){found=true;break}
          }
          if(!found)arr[arr.length]=randomnumber;
        }
    }
    if(reset==0)
    {
        rando();
        for(var i=0;i<9;i++)
        {
            $("#container"+arr[i]).css({"left":leftPos[i]+'vw', "top": topPos[i]+'vh'});
        }
        reset=1;

    }
    var counter1=0, counter2=0;
    var position1 ,position2;
    var id,id1,id2;
    $(".imgContainer").click(function(){
        id=$(this).attr('id');        
        if(counter1==0)
        {
            if(id!=id2)
            {
                counter1=1;
                id1=$(this).attr('id');
                position1 = $(this).position();
                $(this).find("img").toggleClass("clickImg");
                
            }
            else
            {
                counter2=0;
                id2="";
                $(this).find("img").toggleClass("clickImg");
                
            }
        }
        else if(counter2==0)
        {
            if(id!=id1)
            {
                counter2=1;
                id2=$(this).attr('id');
                position2= $(this).position();
                $(this).find("img").toggleClass("clickImg");
            }
            else
            {
                counter1=0;
                id1="";
                $(this).find("img").toggleClass("clickImg");
            }
        }
        else
        {
            if(id==id1)
            {
                counter1=0;
                id1="";
                $(this).find("img").toggleClass("clickImg");
            }
            else if(id==id2)
            {
                counter2=0;
                id2="";
                $(this).find("img").toggleClass("clickImg");
            }
            else
            {
                counter1=0;
                counter2=0;
                id1="";
                id2="";
                $("#"+id1).find("img").toggleClass("clickImg");
                $("#"+id1).find("img").toggleClass("clickImg");
            }
        }
    });

    $('.button').click(function(){
        if(counter1==1 && counter2==1)
        {
            $("#"+id1).css({"left":position2.left, "top": position2.top});
            $("#"+id2).css({"left":position1.left, "top": position1.top});
            $("#"+id1).find("img").addClass("clickImg");
            $("#"+id2).find("img").addClass("clickImg");
            counter1=0;
            counter2=0;
            id1="";
            id2="";
            setTimeout(function(){check();},2000);
        }
        function check()
        {
        pos1 = $("#container1").position();
        pos2 = $("#container2").position();
        pos3 = $("#container3").position();
        pos4 = $("#container4").position();
        pos5 = $("#container5").position();
        pos6 = $("#container6").position();
        pos7 = $("#container7").position();
        pos8 = $("#container8").position();
        pos9 = $("#container9").position();
        if(pos1.left<pos2.left && pos2.left<pos3.left && pos4.left<pos5.left && pos5.left<pos6.left && pos7.left<pos8.left && pos8.left<pos9.left  )
        {
            if(pos1.top<pos4.top && pos4.top<pos7.top && pos2.top<pos5.top && pos5.top<pos8.top && pos3.top<pos6.top && pos6.top<pos9.top  )
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
    }
    });

});
</script>
