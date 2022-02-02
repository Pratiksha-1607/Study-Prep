<?php
$con = mysqli_connect("studprep.mysql.database.azure.com","studprep@studprep","Pratiksha@1607","tms");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
