<?php
	include 'connect.php';

	$query = "INSERT INTO `messages` (`FROM`,`TO`,`TEXT`) VALUES ('". $_GET['from'] . "','". $_GET['to'] . "','". $_GET['text'] . "');";

	$result = mysqli_query($con, $query);

echo mysqli_insert_id($con);



?>