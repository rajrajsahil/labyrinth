<?php
$pagen = 20;
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
        echo "<br>"."level=20";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:4*5=</div>
    <input   id='level20-ans' class="level-answer"  placeholder="Enter Your Ans">
    <button id='submit20-button' class ="level-answerbutton">SUBMIT</button> 
</body>
</html>
<?php
    include "../modal/winner.php";
?>