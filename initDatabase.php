


<?php


//initDatabase

// php query to create table

function initializeDatabase()
{

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database_name = "db_alpha-albatross";

	$connection = new mysqli($servername, $username, $password, $database_name);

	if($connection->connect_error)
	{
		die("Connection Failed".$connection->connect_error);

	}


	//if the connection has not failed means the connection succeeded. So, proceed 
	//as below

	$sql_query = "
	CREATE TABLE tbl_Task
	(
		id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
		taskDescription varchar(255),
		timeStamp DATETIME NOT NULL,
		taskStatus varchar(30)

	)
	";



	if($connection->query($sql_query) === TRUE)
	{
		echo "MySQL Table tbl_Task created successfully";
	}
	else
	{
		echo "Error in creating MySQL Table tbl_Task. Reason:". $connection->error;	
	}


}

function insertIntoDb()
{
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database_name = "db_alpha-albatross";

	$connection = new mysqli($servername, $username, $password, $database_name);

	if($connection->connect_error)
	{
		die("Connection Failed".$connection->connect_error);

	}
	$taskDescription = "";
	$taskCreatedTimeStamp = "";
	$taskStatus = "";

	$insert_query_string = "INSERT INTO tbl_task VALUES("
															.$taskDescription."\","
															.$taskCreatedTimeStamp.",\""
															.$taskStatus."\")";


	echo "<br> DebugText: $insert_query_string:".$insert_query_string;

																


}

function select_query()
{
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database_name = "db_alpha-albatross";

	$connection = new mysqli($servername, $username, $password, $database_name);

	if($connection->connect_error)
	{
		die("Connection Failed".$connection->connect_error);

	}

	$select_query_string = "SELECT * FROM tbl_task";
	$query_result = $connection->query($select_query_string);

	if($query_result->num_rows > 0)
	{
		echo "<div class=\"alert alert-info\">";
		echo "<br> DebugText: SELECT FROM tbl_Task query executed successfully";
		echo "</div>";

		$row = $query_result->fetch_assoc();
		return $row;

		
	}
	else
	{
		echo "<br> DebugText: Error in SELECTing from tbl_Task. Reason:". $connection->error;	
	}

}




?>