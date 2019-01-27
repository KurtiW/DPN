<?php
	include 'connect.php';

	if(isset($_GET['chat']) && isset($_GET['id']) && isset($_GET['text']))
	{
	$query = "INSERT INTO `messages` (`chat_ID`,`user_ID`,`TEXT`) VALUES ('". $_GET['chat'] . "','". $_GET['id'] . "','". $_GET['text'] . "');";

	$result = mysqli_query($con, $query);

	}


?>