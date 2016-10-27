<?php
include "../connect.php";
$winner = $user->winner();
echo "<br>";
foreach ($winner as $key)
{
	echo $key['username']."<br>";
}
?>