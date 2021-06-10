<?php
	require('DatabaseManager.php');
	require('Task.php');

	$databaseConnection = DatabaseManager::getDatabaseConnection();

	if(!$databaseConnection)
	{
		echo "Database connection failed";
	}
	else
	{
		echo "Database connection succeeded.";

		if(isset($_POST['txt_TaskDescription']) && isset($_POST['select_TaskStatus']))
		{
			$taskDescription = $_POST['txt_TaskDescription'];
			$taskStatus = $_POST['select_TaskStatus'];
			$myTask = new Task();
			if($myTask->addTask($databaseConnection, $taskDescription, $taskStatus))
			{
				echo "<br>DebugTask: Add task succeeded.";
				echo "<br><marquee> DebugText: Redirecting to dashboard in 5 seconds...</marquee>";

				header( "refresh:5;url=dashboard.php" );

			}
			else
			{
				echo "<br>DebugTask: Add task failed.";
			}



		}
	}

?>