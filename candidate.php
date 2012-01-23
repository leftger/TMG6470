<?php
session_start();
if(!isset($_SESSION['myusername'])){
header("location:index.html");
}
$host="18.194.1.88:3306"; // Host name 
$username="TMG6470"; // Mysql username 
$password="snett"; // Mysql password 
$db_name="candidates_2012"; // Database name 
$tbl_name="login"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

$result = mysql_query("SELECT * FROM candidates_info WHERE id = '400006'");
if (!$result) {
    echo 'Could not run query: ' . mysql_error();
    exit;
}
$row = mysql_fetch_row($result);

$query = mysql_query("SELECT * FROM candidates_info"); 
$columns = mysql_num_fields($query); 
for($i = 0; $i < $columns; $i++)
{
	echo mysql_field_name(    $query    ,$i) . ": " . $row[$i] . "<br />";
}
?>