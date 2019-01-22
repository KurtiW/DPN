<?php
	include 'connect.php';

	if(isset($_GET['chat_id']) && isset($_GET['user_id']))
	{
		$query = "INSERT INTO dpn.chats (`ID`,`user_ID`) VALUES ('".$_GET['chat_id']."','".$_GET['user_id']."');";
		$result = mysqli_query($con, $query);	



	}
	else if(isset($_GET['user_id']))
	{
		echo mysqli_insert_id($con);
		$query = "INSERT INTO dpn.chats (`ID`,`user_ID`,`VALID`) VALUES ('".mysqli_insert_id($con)."','".$_GET['user_id']."','1');";
		$result = mysqli_query($con, $query);	
	}



?>