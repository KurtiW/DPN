<?php

include 'connect.php';

	if(isset($_GET['chat_id']) && isset($_GET['user_id']) && isset($_GET['password']))
	{
		
		$query = "SELECT * FROM dpn.chats WHERE `ID` = '" .$_GET['chat_id']."' AND  `PASSWORD` ='".$_GET['password']."';";


		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0)
		{
			
			$query = "INSERT INTO dpn.chat_user (`chats_id`,`user_ID`,`VALID`) VALUES ('".$_GET['chat_id']."','".$_GET['user_id']."','1');";
			$result = mysqli_query($con, $query);
		}
	}
	else if(isset($_GET['chat_id']) && isset($_GET['user_id']))
	{
		

			
		$query = "INSERT INTO dpn.chat_user (`chats_id`,`user_ID`,`VALID`) VALUES ('".$_GET['chat_id']."','".$_GET['user_id']."','0');";

		$result = mysqli_query($con, $query);

	}
?>