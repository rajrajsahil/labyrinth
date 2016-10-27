<?php
$pagen = 19;
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
        echo "<br>"."level=19";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:10+9=</div>
    <input   id='level19-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit19-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>