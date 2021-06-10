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
          <h3>Alpha Albatross - PHP Todo App Dashboard</h3>

          <p>
          <?php
          require('initDatabase.php');
          ?>
          <br>
          <form action="form_validate2.php" method="POST" id="form_AddTask" style="margin-bottom:20px;">
            <div class="row">
              <div class="col">
                <label for="addTaskForm">Add Task</label>
                <input type="text" name="txt_TaskDescription" class="form-control">      
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

              </div>
            </div>
         
          </form>

          <button type="submit" form="form_AddTask" value="Add Task" name="btn_AddTask" class="btn btn-primary">Add Task</button>

          
          
          </p>           

        </div>
      </div>
        <div class="row">
          <div class="col">
            <?php
              require('DatabaseManager.php');
              require('Task.php');




              $myTask = new Task();
              $result = $myTask->retrieveAllTasks();

              if($result->num_rows > 0) // if this is true, the result has 1 or more rows
              {
                ?>
                <table class="table">
                <thead>
                <tr>
                <th>ID</th> <th>Task</th> <th>Created time</th> <th>Status</th>
                <th>Update</th><th>Delete</th>
                </tr>
                </thead>
                <tbody>      
                <?php

                 while($row = $result->fetch_assoc() )
                  {
                    
                  ?>
                    <tr>
                    <td>
                    <?php echo $row['id'];
                    $btn_IDString = "btn_ID". $row['id'];
                     ?>
                    </td>
                    <td>
                    <?php echo $row['taskDescription']; ?>
                    </td>
                    <td>
                    <?php echo $row['timeStamp']; ?>
                    </td>
                    <td>
                    <?php echo $row['taskStatus']; ?>
                    </td>
                    <td>
                      <a href="editTask.php?btnID=<?php echo $btn_IDString; ?>" class="btn">
                        <i class='fas fa-edit' style='font-size:24px;color:#000000;'></i>
                      </a>

                    </td>
                    <td><a href="deleteTask.php?btnID=<?php echo $btn_IDString; ?>" class="btn">
                      <i class='fas fa-trash' style='font-size:24px;color:#cc0000;'></i></a>
                    </td>
                    </tr>
                    <?php

                  }
              }
              else
              {
                echo "<br> DebugText: Error in SELECTing from tbl_Task. Reason:". $connection->error; 
              }
            ?>
           </div> 
         </div>
        </div>
        </div>
      </div>

           

    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>