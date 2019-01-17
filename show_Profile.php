<?php
	include 'connect.php';

	if(isset($_GET['name']))
	{
		$query = "SELECT * FROM dpn.user where `NAME` = ".$_GET['name'].";";

	}
	
	if(isset($_GET['id']))
	{
		$query = "SELECT * FROM dpn.user where `ID` = ".$_GET['id'].";";

	}

	
	$result = mysqli_query($con, $query);

	$id;

	while($row = mysqli_fetch_row($result))
	{
		$id = $row[0];
		echo $row[0] ."|" .$row[1] . "<br>";
	}


	$query = "SELECT * FROM dpn.user_profile_attributes where `user_ID` = ".$id.";";


	$result = mysqli_query($con, $query);
	while($row = mysqli_fetch_row($result))
	{
		echo $row[1]."|".$row[2]."|".$row[3]."|";
		$topic_id = $row[1];

		$query_ = "SELECT * FROM dpn.profile_attributes where `ID` = ".$topic_id.";";


		$result_ = mysqli_query($con, $query_);
		while($row_ = mysqli_fetch_row($result_))
		{
			echo $row_[1] . "<br>";
		}
	}

	

?>