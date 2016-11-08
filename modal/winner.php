<?php
require_once "../connect.php";
$winner = $user->winner();
$rank = 1;
foreach ($winner as $key)
{
	echo "<span class='rankNo'>".$rank.". </span>".$key['username']."<br />";
	$rank++;
}
?>