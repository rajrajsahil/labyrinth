<?php
$pagen = 7;
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
        echo "<br>"."level=7";
    ?>    
    <button id='logout-button'>LogOut</button> 
    <br>
    <br>
    <div>QUES:3+4=</div>
    <input   id='level7-ans'  class="level-answer" placeholder="Enter Your Ans">
  <button id='submit7-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>
