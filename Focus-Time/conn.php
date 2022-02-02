<?php
	$conn = new mysqli("studprep.mysql.database.azure.com", "studprep@studprep", "Pratiksha@1607", "tms");
 
	if(!$conn){
		die("Error: Cannot connect to the database");
	}
?>
