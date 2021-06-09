<?php

//form_validate.php

echo "<br> DebugText: echo from form_validate.php";

require('Task.php');

$myTask = new Task();
//$myTask->test_function();

if(isset($_POST['txt_TaskDescription']))
{
	echo "<br> DebugText: post variable is set and so it contains a value";
	echo "<br> DebugText: value of post variable txt_TaskDescription is:" . $_POST['txt_TaskDescription'];
	echo "<br> DebugText: value of post variable select_TaskStatus is:" . $_POST['select_TaskStatus'];
	echo "<br>";
	

	$taskDescription = $_POST['txt_TaskDescription'];
	$taskStatus = $_POST['select_TaskStatus'];
	$myTask->addTask($taskDescription, $taskStatus);

	echo "<br><br><marquee> DebugText: Redirecting to dashboard in 5 seconds...</marquee>";


	header( "refresh:5;url=dashboard.php" );

	
}
else
	echo "<br> DebugText: post variable has not been set";







?>