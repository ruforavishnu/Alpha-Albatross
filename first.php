<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php

	$title = "Welcome to my blog";
	$content = "Thank you for visiting my blog. Let me begin by telling you about blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah blah"
?>

<h3>
	<?php
	echo $title;
	?>

</h3>
<p>
	<?php
	echo $content;

	?>
</p>

<hr>
<h3>Testing section 2</h3>
<p>
<?php

require('initDatabase.php');

//initializeDatabase();

date_default_timezone_set("Asia/Calcutta");
echo date('Y-m-d H:i:s');

?>
<br>

<form action="form_validate.php" method="POST" id="form_AddTask">

	<input type="text" name="txt_TaskDescription">

</form>


<button type="submit" form="form_AddTask" value="Add Task" name="btn_AddTask">Add Task</button>

</p>

	
</body>
</html>

