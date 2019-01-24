<?php
	include 'connect.php';

	if(isset($_GET['chat_id']) && isset($_GET['user_id']) && isset($_GET['password']))
	{
		
		$query = "SELECT * FROM dpn.chats WHERE `ID` = '" .$_GET['chat_id']."' AND '".$_GET['password']."';";
		
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0)
		{
			$query = "INSERT INTO dpn.chats (`ID`,`user_ID`,`VALID`,`PASSWORD`) VALUES ('".$_GET['chat_id']."','".$_GET['user_id']."','0','".$_GET['password']."');";
			$result = mysqli_query($con, $query);
		}
	}
	else if(isset($_GET['user_id']) && isset($_GET['password']))
	{
		
		$query = "SELECT * FROM dpn.chats ORDER BY `ID` DESC";
		$result = mysqli_query($con, $query);	

		while($row = mysqli_fetch_row($result))
		{
		
			$id = $row[0] + 1;
			break;
		}


		$query = "INSERT INTO dpn.chats (`ID`,`user_ID`,`VALID`,`PASSWORD`) VALUES ('". $id."','".$_GET['user_id']."','1','".$_GET['password']."');";
		$result = mysqli_query($con, $query);	
	}



?>