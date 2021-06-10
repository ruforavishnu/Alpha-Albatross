

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
            Delete Task   
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

        $idToBeDeleted = $_GET['btnID'];
        $correctlyTrimmedTaskIDString = substr($idToBeDeleted, 6);
        $delete_query_string = "DELETE FROM tbl_Task WHERE ID=".$correctlyTrimmedTaskIDString;

        echo "<br><br> DebugText: value of delete query: ". $delete_query_string;

        if($connection->query($delete_query_string) === TRUE)
        {
          echo "<br> DebugText: Task deleted from database.";
          echo "<br><br><marquee> DebugText: Redirecting to dashboard in 5 seconds...</marquee>";
          header( "refresh:5;url=dashboard.php" );

        }
        else
        {
          echo "<br> DebugText: delete query failed.";
        }

        ?>
       
        
        
      </p>

        </div>
      </div>
    </div>
   </body>
  </html>
