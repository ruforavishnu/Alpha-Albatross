/* Database for this project 

should have a table tbl_Task
	the table should have following fields
		id,  <-- autoincreasing ID 
		task description, <-- string with more than 200 characters space
		timeStamp, <-- time
		taskStatus <-- String



*/


CREATE TABLE tbl_Task
(
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	taskDescription varchar(255),
	timeStamp DATETIME NOT NULL,
	taskStatus varchar(30)

);