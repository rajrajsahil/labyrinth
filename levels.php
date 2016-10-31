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
	header('Location:../index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
</body>
</html>