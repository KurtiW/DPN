<?php

include 'connect.php';

	if(isset($_GET['chat_id']) && isset($_GET['user_id']))
	{
		
		$query = "Update dpn.chat_user SET `VALID` = '1' WHERE `chats_id` = '" .$_GET['chat_id']."' AND  `user_id` ='".$_GET['user_id']."' AND `VALID` = '0';";

		$result = mysqli_query($con, $query);
		
	}
?>