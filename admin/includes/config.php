<?php 
// DB credentials.
define('DB_HOST','studprep.mysql.database.azure.com');
define('DB_USER','studprep@studprep');
define('DB_PASS','Pratiksha@1607');
define('DB_NAME','tms');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
