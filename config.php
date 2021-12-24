<?php
/* Database credentials. Assuming you are running MySQL
 se*rver with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'parrot');
define('DB_PASSWORD', 'sunny');
define('DB_NAME', 'demo');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
	die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
