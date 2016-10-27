<?php
$pagen = 14;
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
        echo "<br>"."level=14";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:10+4=</div>
    <input   id='level14-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit14-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>