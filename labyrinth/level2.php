<?php
session_start();
if (!isset($_SESSION['username'])||$_SESSION['level']!=2) {
	header ('Location: index.php');
}
echo $_SESSION['level'];


?>
<!DOCTYPE html>
<html>

<head>


</head>
<body>


		hello <?php
    echo $_SESSION['username'];
    echo "<br>"."level=2";
    ?>
   <button id='logout-button'>LogOut</button> 
   <br>
   <br>
   <div>QUES:6-4=</div>
   
      <input   id='level2-ans' class="level-answer" placeholder="Enter Your Ans">
  <button id='submit2-button' class ="level-answerbutton">SUBMIT</button>
  <!-- <br><br><br><br><br><br>
   	<input  id='username' type = 'text' placeholder="Username " >
   	<input  id='email' type = 'text' placeholder="email" >
   	<input  id='contact' type = 'text' placeholder="contact" >
				
   <input   id='password' placeholder="Password">
   <input   id='re-password' placeholder="Re-Password">

		
   <button id='signup-button'>Signup</button> 

-->


 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="loginclass.js" ></script>
 
</body>
</html>
<?php
include "winner.php";

?>