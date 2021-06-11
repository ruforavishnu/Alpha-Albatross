<?php

if(isset($_POST['txt_EditTaskDescription']) && isset($_POST['select_TaskStatus']) )
{
	require_once('DatabaseManager.php');

	$databaseConnection = DatabaseManager::getDatabaseConnection();

	if(!$databaseConnection)
	{
	echo "<br> DebugText:Database connection failed";
	}
	else
	{
		echo "<br> DebugText: Database connection succeeded.";
	}	
	
	$connection = $databaseConnection;

	$taskDescriptionString = $_POST['txt_EditTaskDescription'];
	$taskStatusString = $_POST['select_TaskStatus'];
	$taskIDString = $_POST['hiddeninput_buttonID'];
	$correctlyTrimmedTaskIDString = substr($taskIDString, 6);
	

	$update_query_string = "UPDATE tbl_task SET taskDescription = \"" .$taskDescriptionString. "\", "
											."taskStatus=\"". $taskStatusString. "\""
											." WHERE ID=". $correctlyTrimmedTaskIDString;

	

	if($connection->query($update_query_string) === TRUE)
	{
		header( "refresh:1;url=dashboard.php" );
	}
	else
	{
		echo "<br> DebugText: Error in UPDATING to tbl_Task. Reason:". $connection->error;	
	}
}
?>
