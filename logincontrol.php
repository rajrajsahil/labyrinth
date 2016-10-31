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
	  echo $user->signup($username, $password1,$email,$contact);
  }
else if($functionname=="getusername")
  {
	 echo $user->getusername();
  }
else if($functionname=="nextlevel")
  {
	$answer = $_POST['answer'];
	echo $user->nextlevel($answer);
	//echo "incorrect answer";
}
else if($functionname=="checkuser")
{
	$username = $_POST["user"];
	echo $user->checkuser($username);
}
else if($functionname=="checkemail")
{
	$useremail=$_POST["useremail"];
	echo $user->checkemail($useremail);
}
else if($functionname=="checkcontact")
{
	$usercontact=$_POST["usercontact"];
	echo $user->checkcontact($usercontact);
}
?>