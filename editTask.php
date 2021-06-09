

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Alpha Albatross - PHP Todo App Dashboard</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">
        	<h3>
        		Edit Task		
        	</h3>
        	<p>
				<?php

				if(isset($_GET['btnID']))
				echo "<br> DebugTask: get parameter btnID works. Its value is:". $_GET['btnID'];

				$servername = "localhost";
				$username = "root";
				$password = "root";
				$database_name = "db_alpha-albatross";

				$connection = new mysqli($servername, $username, $password, $database_name);

				if($connection->connect_error)
				{
				die("Connection Failed".$connection->connect_error);
				}
				else
				{
				echo "<br> DebugText: Database connection succeeded";
				}



				?>
				<form action="evaluateEditTask.php" method="POST" id="form_EditTask" style="margin:30px;">
				<div class="row">
					<div class="col">
						<label for="editTaskForm">Edit Task</label>
						<input type="text" name="txt_EditTaskDescription" class="form-control">      
					</div>
					<div class="col">
						<label for="addTaskForm">Task Status</label>
						<select class="form-control" name="select_TaskStatus">
						<option selected>Not-Begun</option>
						<option value="Started">Started</option>
						<option value="Little-done">Little-done</option>
						<option value="Half-done">Half-done</option>
						<option value="Almost-done">Almost-done</option>
						<option value="Completed">Completed</option>
						</select>
						<input type="hidden" name="hiddeninput_buttonID" value = "<?php echo $_GET['btnID']; ?>">


					</div>
				</div>
				</form>
				<button type="submit" form="form_EditTask" value="Edit Task" name="btn_EditTask" class="btn btn-primary">Update Task</button>

				
			</p>

        </div>
      </div>
    </div>
   </body>
  </html>
