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

	$taskDescription = $_POST['txt_TaskDescription'];
	$taskStatus = "Not Begun";
	$myTask->addTask($taskDescription, $taskStatus);
	
}
else
	echo "<br> DebugText: post variable has not been set";







?>