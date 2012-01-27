<?php
$host="18.194.1.88:3306"; // Host name 
$username="TMG6470"; // Mysql username 
$password="snett"; // Mysql password 
$db_name="candidates_2012"; // Database name 
$tbl_name="login";
$conn = mysql_connect($host, $username, $password) or die(mysql_error());
mysql_select_db('your_database', $conn) or die(mysql_error());
?>