<?php
	include 'connect.php';

	$query = "INSERT INTO `messages` (`chat_ID`,`user_ID`,`TEXT`) VALUES ('". $_GET['chat'] . "','". $_GET['id'] . "','". $_GET['text'] . "');";

	$result = mysqli_query($con, $query);

echo mysqli_insert_id($con);



?>