<?php
	include 'connect.php';

	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.chats where `ID` = ".$_GET['id'].";";

	}

	
	$result = mysqli_query($con, $query);



	while($row = mysqli_fetch_row($result))
	{
		
		echo $row[1] . "|" ;

		$query_ = "SELECT * FROM dpn.user where `ID` = ".$row[1].";";


		$result_ = mysqli_query($con, $query_);
		while($row_ = mysqli_fetch_row($result_))
		{
			echo $row_[1] . ";";
		}
	}

?>