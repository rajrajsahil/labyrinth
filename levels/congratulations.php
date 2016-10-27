<?php
session_start();
if(!isset($_SESSION['username']))
{
header('Location:'.'../index'.'.php');
}
else
{
	if($_SESSION['level']<21)
	{
		header('Location:'.'level'.$_SESSION['level'].'.php');
	}
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
 	hello 
    <?php
        echo $_SESSION['username'];
        echo "<br>";
    ?>
<h1>Congratulaion</h1>
<button id='logout-button'>LogOut</button>
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="../script/loginclass.js" ></script>

</body>
</html>