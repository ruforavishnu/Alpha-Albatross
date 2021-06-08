<?php

class Task
{
	/* has  
			task id
			taskdescription
			taskCreatedTimeStamp
			taskStatus <= this has three options not begun, completed and half-completed, deleted
	*/

	public $id;
	public $description;
	public $createdTimeStamp;
	public $taskStatus;

	/*TODO:
	create a function/constructor that initializes
			 $createdTimeStamp with the time the object is created
			 $id of the task
			 $taskStatus as not-begun





	*/

	public function test_function()
	{
		echo "<br> DebugText:  echoing test function ";
	}

	public function addTask($description, $status)
	{

		echo "<br> DebugText: Entered php function addTask()";

		/*	1.get last ID used. Add one to the lastID and create new ID number
			2. get the content of the value in the text box and add it to the variable taskDescription
			3. get the current TimeStamp as and when this function has been invoked and store that value in the $createdTimeStamp
			4. initialize the $taskStatus as not-begun

		*/
			//subtask 1
			/*
				1. read the values of the table in mySql and get the last ID used.
				2. if no id present in table or if table empty. set id = 1



			*/


			//subtask 2
			date_default_timezone_set("Asia/Calcutta");
			$currentTimeStamp = date('Y-m-d H:i:s');
			$taskStatus = "Not-Begun";
		/*	$insert_query = "INSERT INTO tbl_Task (\"". $description. "\"," .$currentTimeStamp.",\"" .$taskStatus. "\")";
*/

			$servername = "localhost";
			$username = "root";
			$password = "root";
			$database_name = "db_alpha-albatross";

			$connection = new mysqli($servername, $username, $password, $database_name);

			if($connection->connect_error)
			{
			die("Connection Failed".$connection->connect_error);

			}
			/*$taskDescription = "";
			
			$taskStatus = "";*/
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
			}
			else
			{
				echo "<br> DebugText: Error in inserting to tbl_Task. Reason:". $connection->error;	
			}


			
			



	}



}

?>