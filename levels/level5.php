<?php
$pagen = 5;
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
        echo "<br>"."level=5";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:5*1=</div>
    <input   id='level5-ans' class="level-answer" placeholder="Enter Your Ans">
    <button id='submit5-button' class="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>