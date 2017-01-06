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
            #level-answer{
                display: none;
            }
    </style>

      <div id="intro">
         <div id="levelLeft">
             <div id="levelHead">
                 <h1>Level 17</h1>
             </div>
             <p>Actor name is <span id="actor">.....</span><input type="text" id="actor_name"></p>
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
        $(document).ready(function()
        {   
            var count = 0;
            $("#yes_no").click(function()
            {
                var flag = Math.random()*10;
                if(flag>5)
                {
                    $(this).html("Haan");
                }
                else
                {
                    $(this).html("Naa");
                }
            });
            $(document).on('click','#actor',function()
            {
                count++;
                if(count%2==0)
                {   
                    $(this).css("display","none");
                    $("#actor_name").css("display","inline");

                }
            });
            $(document).on('focusout','#actor_name',function()
            {
                var input = $(this).val();
                var name = input.replace(/\s/g,'');
                var answer = name.toLowerCase();
                if(answer=="shahrukhkhan"||"shahrukh")
                {   
                    $("#yes_no").off("click");
                    $("#yes_no").html("Dear ....");
                    $("#level-answer").css("display","inline-block");

                }

            })
        })
</script>
