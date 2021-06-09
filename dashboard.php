<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
          <form action="form_validate.php" method="POST" id="form_AddTask" style="margin-bottom:20px;">
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

                ?>

                <table class="table">
                <thead>
                <tr>
                <th>ID</th> <th>Task</th> <th>Created time</th> <th>Status</th>
                </tr>
                </thead>
                <tbody>
                
                <?php

                while($row = $query_result->fetch_assoc() )
                  {
                  ?>
                    <tr>
                    <td>
                    <?php echo $row['id']; ?>
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
                    </tr>
                    <?php

                  }

                ?>
                
                
                </tbody>
                </table>
                
              <?php

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