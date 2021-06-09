Commit file details

Total time taken in this project = 60+83+70+33 = 246 mins or 4 hours 06 mins

Changes in commit#3
********************

Modified on: june 8, 2021
Changes made: 

1. Created form form_AddTask in html view
2. On form submit, the control passes to form_validate.php
3. form_validate.php checks if $_POST['txt_TaskDescription'] has been set
4. If that is true, then the control proceeds to add a insert query to the database
5. Insert query succeeds. The input value , timestamp and related values are entered into the table tbl_task which is part of db_alpha-albatross

Time taken: 83 mins


Changes in commit#4
********************

Modified on: june 8, 2021
Changes made: 

1. Added bootstrap 4 styling
2. Select query done. 
3. Dashboard shows all tasks on page load
4. Add task button adds the added task to the db and once 5 seconds is over, it refreshes the page and the on page load after refresh the just now added task is also presented in the table element.


Time taken: 70 mins


Changes in commit#5
********************

Time taken: 33 mins

Modified on: june 8, 2021
Changes made: 
1. Added css styling to the form
2. Added a select option in the form for the $taskStatus element
3. Wrote code for $taskStatus functionality
4. Dashboard has functionality of 'C' and 'R' in CRUD. Next need to write update and delete element code







