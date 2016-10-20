<?php
session_start();
if (!isset($_SESSION['username'])) {
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
    echo "<br>"."level=16";
    ?>
   <button id='logout-button'>LogOut</button> 
   <br>
   <br>
   <div>QUES:4*4=</div>
   
      <input   id='level16-ans' placeholder="Enter Your Ans">
  <button id='submit16-button'>SUBMIT</button>

 <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="loginclass.js" ></script>
 <script src="levels.js" ></script>

</body>
</html>