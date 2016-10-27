<?php
$pagen = 13;
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
        echo "<br>"."level=13";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:10+3=</div>
   
    <input   id='level13-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit13-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>