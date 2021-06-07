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

	private addTask($description, $status)
	{
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
			$insert_query = "INSERT INTO tbl_Task ("+ $description+ "," +  $taskStatus+ ")";

			echo "the insert query is: "+$insert_query;
			



	}



}

?>