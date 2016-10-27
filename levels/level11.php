<?php
$pagen = 11;
include "../levels.php";
?>
<!DOCTYPE html>
<html>

<head>


</head>
<body>
    hello 
    <?php
        echo $_SESSION['username'];
        echo "<br>"."level=11";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:10+1=</div>
    <input   id='level11-ans'  class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit11-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>