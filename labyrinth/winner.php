<?php
include "connect.php";
$winner = $user->winner();
foreach ($winner as $key)
{
	echo $key['username']."<br>";
}
?>