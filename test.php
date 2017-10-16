<?php

	$link = mysqli_connect("shareddb1d.hosting.stackcp.net","mypics-31370ce6","qVk8rbpex/XZ","mypics-31370ce6");

$query = "SELECT * FROM `pictures` ORDER BY `utime` DESC";

if($result = mysqli_query($link, $query)) {



?>
