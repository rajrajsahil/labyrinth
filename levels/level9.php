<?php
$pagen = 9;
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
        echo "<br>"."level=9";
    ?>
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:4+4+1=</div>
    <input   id='level9-ans'  class="level-answer" placeholder="Enter Your Ans">
    <button id='submit9-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>