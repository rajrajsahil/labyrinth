<?php
$pagen = 2;
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
        echo "<br>"."level=2";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:6-4=</div>
    <input   id='level2-ans' class="level-answer" placeholder="Enter Your Ans">
    <button id='submit2-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>  