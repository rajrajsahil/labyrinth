<?php
$pagen = 3;
include "../levels.php";
?> 
<!DOCTYPE html>
<html>

<head>


</head>
<body>


		hello <?php
    echo $_SESSION['username'];
    echo "<br>"."level=3";
    ?>
   <button id='logout-button'>LogOut</button> 
   <br>
   <br>
   <div>QUES:5-2=</div>
   
      <input   id='level3-ans' class="level-answer" placeholder="Enter Your Ans">
  <button id='submit3-button' class ="level-answerbutton">SUBMIT</button>
</body>
</html>
<?php
    include "../modal/winner.php";
?>