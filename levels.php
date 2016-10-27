<?php
session_start();
if(isset($_SESSION['username']))
{	if($pagen!=$_SESSION['level'])
	{
		header('Location:'.'level'.$_SESSION['level'].'.php');
	}
}
else
{
	header('Location:index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.4.min.js"></script>
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="../script/loginclass.js"></script>
</body>
</html>