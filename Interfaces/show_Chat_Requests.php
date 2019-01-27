<?php
	include 'connect.php';

	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.chat_user where `user_ID` = '".$_GET['id']."' and `VALID` = '0';";

	
		$result = mysqli_query($con, $query);


		while($row = mysqli_fetch_row($result))
		{
			echo $row[0] . "|" . $row[1] . "|";

			$query_ = "SELECT * FROM dpn.chats where `ID` = ".$row[0].";";


		$result_ = mysqli_query($con, $query_);
		while($row_ = mysqli_fetch_row($result_))
		{
			echo $row_[1] . "|";
		}
		}
	}

?>