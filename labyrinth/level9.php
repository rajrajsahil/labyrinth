<?php
session_start();
if (!isset($_SESSION['username'])||$_SESSION['level']!=9) {
	header ('Location: index.php');
}



?>
<!DOCTYPE html>
<html>

<head>


</head>
<body>


		hello <?php
    echo $_SESSION['username'];
    echo "<br>"."level=9";
    ?>
   <button id='logout-button'>LogOut</button> 
   <br>
   <br>
   <div>QUES:4+4+1=</div>
   
      <input   id='level9-ans'  class="level-answer" placeholder="Enter Your Ans">
  <button id='submit9-button' class ="level-answerbutton">SUBMIT</button>

 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="loginclass.js" ></script>
 <script src="levels.js" ></script>

</body>
</html>
<?php
include "winner.php";

?>