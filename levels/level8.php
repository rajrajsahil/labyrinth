<?php
$pagen = 8;
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
        echo "<br>"."level=8";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:4+4=</div>
    <input   id='level8-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit8-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>