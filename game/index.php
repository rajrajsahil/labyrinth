<?php
session_start();
if(isset($_SESSION['username']))
{	if($pagen!=$_SESSION['level'])
	{
		header('Location:'.$_SESSION['levelname'].'.php');
	}
}
else
{
	header('Location:../index.php');
}
?>