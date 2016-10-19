<?php 
include 'connect.php';

$functionname = $_POST['functionname'];

if($functionname=="login")
{
$credentials = $_POST['credentials'];
$password = $_POST['password'];

 echo $user->login($credentials, $password);
}
else if($functionname=="logout")
{
 echo $user->logout();
}
else if($functionname=="signup")
{
	$username = $_POST['username'];
	$password1 = $_POST['password1'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
    echo $user->signup($username, $password1,$email,$contact); ;
}
/*if($functionname=="signup")
{
	 $user->signup($username, $password1,$email,$contact);
}*/
?>