<?php
//start_session
session_start();

// constants storing non repeating values
define('SITEURL', 'http/localhost/food-order/');
define('LOCALHOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', '');

// query to save data to database
$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error); //database connection
$db_select = mysqli_select_db($conn, 'food-order') or die(mysqli_error());//selecting database.

?>