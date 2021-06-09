<?php

if(isset($_POST['txt_EditTaskDescription']))
{
	echo "<br> DebugText: POST parameter txt_EditTaskDescription works. Its value is:". $_POST['txt_EditTaskDescription'];
	echo "<br> DebugText: POST parameter select_TaskStatus works. Its value is:". $_POST['select_TaskStatus'];
	echo "<br> DebugText: POST parameter hiddeninput_buttonID works. Its value is:". $_POST['hiddeninput_buttonID'];

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database_name = "db_alpha-albatross";

	$connection = new mysqli($servername, $username, $password, $database_name);

	if($connection->connect_error)
	{
	die("Connection Failed".$connection->connect_error);

	}
	else
	{
		echo "<br> DebugText: Database connection succeeded";
	}

	$taskDescriptionString = $_POST['txt_EditTaskDescription'];
	$taskStatusString = $_POST['select_TaskStatus'];
	$taskIDString = $_POST['hiddeninput_buttonID'];
	$correctlyTrimmedTaskIDString = substr($taskIDString, 6);
	echo "<br>DebugText: value of correctlyTrimmedTaskIDString : ". $correctlyTrimmedTaskIDString;


	$update_query_string = "UPDATE tbl_task SET taskDescription = \"" .$taskDescriptionString. "\", "
											."taskStatus=\"". $taskStatusString. "\""
											." WHERE ID=". $correctlyTrimmedTaskIDString;

	echo "<br><br> DebugText: value of update string: ". $update_query_string;

	if($connection->query($update_query_string) === TRUE)
	{
		echo "<br> DebugText: UPDATE tbl_Task query executed successfully";
		echo "<br><br><marquee> DebugText: Redirecting to dashboard in 5 seconds...</marquee>";


		header( "refresh:5;url=dashboard.php" );
	}
	else
	{
		echo "<br> DebugText: Error in UPDATING to tbl_Task. Reason:". $connection->error;	
	}





}
	


?>
