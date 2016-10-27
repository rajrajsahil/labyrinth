<?php
$pagen = 17;
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
        echo "<br>"."level=17";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:10+7=</div>
    <input   id='level17-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit17-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>