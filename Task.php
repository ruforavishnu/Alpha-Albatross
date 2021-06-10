<?php

require_once('DatabaseManager.php');



class Task
{

	
	public function addTask($dbResource, $description, $status)
	{

		
			$taskStatus = $status;
			$connection = $dbResource;

			date_default_timezone_set("Asia/Calcutta");
			$taskCreatedTimeStamp = date('Y-m-d H:i:s');

			$insert_query_string = "INSERT INTO tbl_task VALUES(DEFAULT, \""
														.$description
														."\",\""
														.$taskCreatedTimeStamp
														."\",\""
														.$taskStatus
														."\")";


			echo "<br> DebugText: method1 :".$insert_query_string;


			if($connection->query($insert_query_string) === TRUE)
			{
				echo "<br> DebugText: Insert into tbl_Task query executed successfully";

				return TRUE;
			}
			else
			{
				echo "<br> DebugText: Error in inserting to tbl_Task. Reason:". $connection->error;	
				return FALSE;
			}

	}

	public function retrieveAllTasks()
	{
		$connection = DatabaseManager::getDatabaseConnection();

		if($connection)
		{

			$select_query_string = "SELECT * FROM tbl_task";
        	$query_result = $connection->query($select_query_string);

        	return $query_result;


		}
		else
		{
			return NULL;
		}


	}



}

?>