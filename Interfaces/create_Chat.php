<?php
	include 'connect.php';

	if(isset($_GET['chat_id']) && isset($_GET['user_id']))
	{
		$query = "INSERT INTO dpn.chats (`ID`,`user_ID`,`VALID`) VALUES ('".$_GET['chat_id']."','".$_GET['user_id']."','1');";
		$result = mysqli_query($con, $query);	



	}
	else if(isset($_GET['user_id']))
	{
		
		$query = "SELECT * FROM dpn.chats ORDER BY `ID` DESC";
				$result = mysqli_query($con, $query);	

		while($row = mysqli_fetch_row($result))
		{
		
			$id = $row[0] + 1;
			break;
		}


		$query = "INSERT INTO dpn.chats (`ID`,`user_ID`,`VALID`) VALUES ('". $id."','".$_GET['user_id']."','1');";
		$result = mysqli_query($con, $query);	
	}



?>