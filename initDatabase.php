//initDatabase

// php query to create table


<?php

function initializeDatabase()
{

	$servername = "localhost";
	$username = "root";
	$password = "root";
	$database_name = "db_alpha-albatross"

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




?>