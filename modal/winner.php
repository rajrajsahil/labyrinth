<?php
require_once "../connect.php";
$winner = $user->winner();
echo "<br>";
foreach ($winner as $key)
{
	echo "<li>".$key['username']."</li>";
}
?>