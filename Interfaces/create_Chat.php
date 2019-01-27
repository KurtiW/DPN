<?php
	include 'connect.php';

	if(isset($_GET['name']) && isset($_GET['password']) && isset($_GET['user_id']))
	{
		
		$query = "INSERT INTO dpn.chats (`NAME`,`PASSWORD`) VALUES ('".$_GET['name']."','".$_GET['password']."');";

		$result = mysqli_query($con, $query);
		

		$id = mysqli_insert_id($con);


		$query = "INSERT INTO dpn.chat_user (`chats_id`,`user_ID`,`VALID`) VALUES ('".$id."','".$_GET['user_id']."','1');";
		$result = mysqli_query($con, $query);

		echo $id;
	}
?>