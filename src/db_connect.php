<!-- author: Jia Sheng Ma -->
<?php
require 'constants.php';

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

if(mysqli_connect_errno()) {
	die("Database connection failed. <br />" .
		mysqli_connect_error($connection) . " (" . 
		mysqli_connect_errno() . ") <br />");
}

// debug
echo "[DEBUG] Connection: " . mysqli_get_host_info($connection) . "<br/>";
?>
