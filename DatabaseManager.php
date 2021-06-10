<?php

class DatabaseManager
{



	public static function getDatabaseConnection()
	{
		$servername = "localhost";
		$username = "root";
		$password = "root";
		$database_name = "db_alpha-albatross";

		$connection = new mysqli($servername, $username, $password, $database_name);

		if($connection->connect_error)
		{
			return NULL;

		}
		else
		{
			return $connection;
		}
	}

}

?>