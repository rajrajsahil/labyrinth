<?php 
require_once 'connect.php';
require_once 'user.php';



$user = new user($pdo);



$functionname = $_POST['functionname'];

if($functionname=="login")
{
$credentials = $_POST['credentials'];
$password = $_POST['password'];

 echo $user->login($credentials, $password);
}
if($functionname=="logout")
{
 echo $user->logout();
}
if($functionname=="signup")
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