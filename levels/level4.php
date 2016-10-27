<?php
$pagen = 4;
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
        echo "<br>"."level=4";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:2*2=</div>
    <input   id='level4-ans' class="level-answer" placeholder="Enter Your Ans">
    <button id='submit4-button' class="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>