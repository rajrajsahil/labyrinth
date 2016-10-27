<?php
$pagen = 10;
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
        echo "<br>"."level=10";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:4+4+2=</div>
    <input   id='level10-ans'  class="level-answer" placeholder="Enter Your Ans">
    <button id='submit10-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>